<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;

class GlobalSearchController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $query = $request->input('q');

        $customers = Customer::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('first_name', 'LIKE', '%' . $query . '%')
                ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                ->orWhere('username', 'LIKE', '%' . $query . '%');
        })->get();

        $customerIds = $customers->pluck('id')->toArray();

        $tickets = Ticket::whereIn('customer_id', $customerIds)
            ->orWhere(function ($queryBuilder) use ($query) {
                $queryBuilder->where('title', 'LIKE', '%' . $query . '%')
                    ->orWhere('description', 'LIKE', '%' . $query . '%')
                    ->orWhere('scheduled_date', 'LIKE', '%' . $query . '%');
            })->get();

        $payments = Payment::whereIn('customer_id', $customerIds)
            ->orWhere(function ($queryBuilder) use ($query) {
                $queryBuilder->where('first_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('amount', 'LIKE', '%' . $query . '%')
                    ->orWhere('account_number', 'LIKE', '%' . $query . '%');
            })->get();

        return Inertia::render('Data', [
            'users' => $users,
            'customers' => $customers,
            'tickets' => $tickets,
            'payments' => $payments,
        ]);
    }
}
