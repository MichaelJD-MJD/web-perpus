<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction_loan;
use App\Models\Transaction_return;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction_loan::with(['return'])->get();
        return view('pages.admin.transaction.index',[
            'transactions' => $transactions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction_loan::findOrFail($id);
        return view('pages.admin.transaction.edit',[
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = $request->status;
        $tanggal_pengembalian = $request->tanggal_pengembalian;

        // update
        $transaction = Transaction_loan::findOrFail($id);
        $transaction->status = $status;
        $transaction->save();

        // Simpan data transaction_returns
        $returnData = [
            'id_peminjaman' => $transaction->id,
            'tanggal_pengembalian' => $tanggal_pengembalian
        ];
        Transaction_return::create($returnData);

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Transaction_loan::findOrFail($id);
        Transaction_return::where('id_peminjaman', $item->id)->delete();
        $item->delete();

        return redirect()->route('transaction.index');
    }
}
