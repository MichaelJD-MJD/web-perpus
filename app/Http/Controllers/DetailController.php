<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction_loan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index(string $id){
        $book = Book::with(['category'])->findOrFail($id);

        return view('pages.detail',[
            'book' => $book
        ]);
    }

    public function success(string $id){
        Transaction_loan::create([
            "id_user" => Auth::id(),
            "id_buku" => $id,
            "tanggal_pinjam" => Carbon::now()
        ]);

        return view('pages.sukses');
    }
}
