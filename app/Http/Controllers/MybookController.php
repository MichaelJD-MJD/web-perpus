<?php

namespace App\Http\Controllers;

use App\Models\Transaction_loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MybookController extends Controller
{
    public function index(){
        $items = Transaction_loan::with(['book'])->where('id_user', Auth::id())->where('status','Sedang Dipinjam')->get();
        $items2 = Transaction_loan::with(['book','return'])->where('id_user', Auth::id())->whereNot('status', 'Sedang Dipinjam')->get();

        return view('pages.mybook',[
            "items" => $items,
            "items2" => $items2
        ]);
    }
}
