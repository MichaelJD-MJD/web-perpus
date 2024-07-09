<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(){
        $items = Favorite::with(['book'])->where('id_user',Auth::id())->get();

        return view('pages.favorite',[
            "items" => $items
        ]);
    }

    public function add(string $id){
        $bookId = $id; 
        $user = Auth::id();

        Favorite::create([
            'id_user' => $user,
            'id_buku' => $bookId,
        ]);

        return redirect()->route('favorite');
        
    }

    public function destroy(string $id){
        $item = Favorite::findOrFail($id);
        $item->delete();

        return redirect()->route('favorite');
    }
}
