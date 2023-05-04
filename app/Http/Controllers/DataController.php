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

        return Inertia::render('Data', [
            'users' => $users,
            'customers' => $customers,
            'tickets' => $tickets,
            'payments' => $payments,
        ]);
    }

}