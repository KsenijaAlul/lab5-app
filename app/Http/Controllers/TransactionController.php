<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        $totalAmount = Transaction::sum('amount');
        $totalTransactions = Transaction::count();

        return view('transactions.index', compact('transactions', 'totalAmount', 'totalTransactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_name' => 'required|string|max:255',
            'sender_name' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'sender_account' => 'required|string|max:255',
            'receiver_account' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        Transaction::create($validated);

        return redirect()->route('transactions.index')->with('success', 'Transaction added successfully!');
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $validated = $request->validate([
            'employee_name' => 'required|string|max:255',
            'sender_name' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'sender_account' => 'required|string|max:255',
            'receiver_account' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        $transaction->update($validated);

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully!');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully!');
    }
}