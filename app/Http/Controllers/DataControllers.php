<?php 

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Ticket;
use App\Models\Payment;

class DataController extends Controller
{
    public function index()
    {
        $users = User::all();
        $customers = Customer::all();
        $tickets = Ticket::all();
        $payments = Payment::all();

        $filteredCustomers = $this->search($customers, ['first_name', 'last_name'], request('q'));
        $filteredTickets = $this->search($tickets, ['title', 'description', 'scheduled_date'], request('q'));
        $filteredPayments = $this->search($payments, ['first_name', 'last_name', 'amount'], request('q'));

        return Inertia::render('Data', [
            'users' => $users,
            'customers' => $filteredCustomers,
            'tickets' => $filteredTickets,
            'payments' => $filteredPayments,
        ]);
    }

    private function search($data, $fields, $query)
    {
        return $data->filter(function ($item) use ($fields, $query) {
            foreach ($fields as $field) {
                if (stripos($item->$field, $query) !== false) {
                    return true;
                }
            }
            return false;
        });
    }
}
