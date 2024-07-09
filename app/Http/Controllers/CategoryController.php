<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::all();
        $selectedCategory = 'all'; // Default category

        return view('pages.categories', [
            'categories' => $categories,
            'books' => $books,
            'selectedCategory' => $selectedCategory
        ]);
    }

    public function search(string $id)
    {
        $categories = Category::all();
        
        if ($id == 'all') {
            $books = Book::all();
        } else {
            $books = Book::where('genre', $id)->get();
        }

        return view('pages.categories', [
            'categories' => $categories,
            'books' => $books,
            'selectedCategory' => $id
        ]);
    }
}
