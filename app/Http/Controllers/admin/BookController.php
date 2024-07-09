<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with(['category'])->get();
        return view('pages.admin.book.index', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Category::all();
        return view('pages.admin.book.create',[
            'genre' => $genre
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $data = $request->all();
        $data['cover'] = $request->file('cover')->store('assets/gallery', 'public');

        Book::create($data);
        return redirect()->route('book.index');
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
        $book = Book::with(['category'])->findOrFail($id);
        $genre = Category::all();
        return view('pages.admin.book.edit', [
            "book" => $book,
            'genre' => $genre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        $data = $request->all();
        $item = Book::findOrFail($id);
        if(isset($data['check']) && $data['check'] == 'on'){
            $data['cover'] = $item->cover;
        }else{
            if ($request->hasFile('cover')) {
                $data['cover'] = $request->file('cover')->store('assets/gallery', 'public');
            }
        }

        $item->update($data);

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Book::findOrFail($id);
        $item->delete();

        return redirect()->route('book.index');
    }
}
