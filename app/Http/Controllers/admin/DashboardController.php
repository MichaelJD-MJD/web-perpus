<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Transaction_loan;
use App\Models\Transaction_return;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all();
        $books = Book::all();
        $status = Transaction_loan::where('status','Dikembalikan')->count();
        $denda = Transaction_return::sum('denda');

        return view('pages.admin.dashboard',[
            'users' => $users,
            'books' => $books,
            'status' => $status,
            'denda' => $denda,
        ]);
    }
}
