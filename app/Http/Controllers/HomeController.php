<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $items = Book::take(6)->get();
        $items2 = Book::inRandomOrder()->take(6)->get();

        return view("pages.dashboard",[
            "items" => $items,
            "items2" => $items2
        ]);
    }
}
