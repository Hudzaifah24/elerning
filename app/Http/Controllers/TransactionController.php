<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::paginate(5);
        
        return view('pages.admin.transactions.index', compact('transactions'));
    }

    public function show($id) {
        $transaction = Transaction::with(['user'])->find($id);

        $transaction_details = TransactionDetail::with(['videos'])->where('transaction_id', $transaction->id)->get();
        
        return view('pages.admin.transactions.show', compact('transaction', 'transaction_details'));
    }
}
