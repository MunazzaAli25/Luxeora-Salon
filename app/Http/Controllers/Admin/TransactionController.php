<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Client;
use App\Models\Appointment;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Payment::latest()->get();
        $clients = Client::all() ?? [];
        $appointments = Appointment::all() ?? [];

        return view('Admin.transactions.index', compact('transactions', 'clients', 'appointments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'nullable',
            'appointment_id' => 'nullable',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|in:cash,card,online',
            'status' => 'required|in:completed,pending,refunded',
        ]);

        Payment::create($validated);

        return redirect()->back()->with('success', 'Transaction recorded successfully.');
    }

    public function update(Request $request, $id)
    {
        $transaction = Payment::findOrFail($id);

        $validated = $request->validate([
            'client_id' => 'nullable',
            'appointment_id' => 'nullable',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|in:cash,card,online',
            'status' => 'required|in:completed,pending,refunded',
        ]);

        $transaction->update($validated);

        return redirect()->back()->with('success', 'Transaction updated successfully.');
    }

    public function destroy($id)
    {
        $transaction = Payment::findOrFail($id);
        $transaction->delete();

        return redirect()->back()->with('success', 'Transaction deleted successfully.');
    }
}