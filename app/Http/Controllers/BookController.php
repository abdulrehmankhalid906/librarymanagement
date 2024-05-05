<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //Limited Fields
        // $books = Book::with(['user' => function ($query) {
        //     $query->select('id', 'name', 'email');
        // }])->where('user_id', Auth::user()->id)->get();

        $books = Book::with('user')->get();
        // return $books;
        return view('books.books', [
            'books' => $books
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
    public function store(BookRequest $request)
    {
        $book = new Book();
        $book->user_id = auth()->id();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->is_active = $request->is_active;

        $book->save();

        return redirect()->back()->with('success', 'The book has been published');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
