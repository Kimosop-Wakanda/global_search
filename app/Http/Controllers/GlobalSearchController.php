<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;

class GlobalSearchController extends Controller
{
    public function index(Request $request)
    {

        $query = $request->query('query');
        $customers = Customer::where('first_name', 'like', "%$query%")
                             ->orWhere('last_name', 'like', "%$query%")
                             ->orWhere('username', 'like', "%$query%")
                             ->get();
        $tickets = Ticket::where('title', 'like', "%$query%")
                          ->orWhere('description', 'like', "%$query%")
                          ->get();
        $payments = Payment::where('transaction_code', 'like', "%$query%")
                            ->orWhere('first_name', 'like', "%$query%")
                            ->orWhere('last_name', 'like', "%$query%")
                            ->get();
        return view('search', compact('customers', 'tickets', 'payments'));
    }
}
