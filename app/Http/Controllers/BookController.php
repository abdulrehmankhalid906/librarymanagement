<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Auth;
use App\Notifications\BookingNotification;

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
        return view('books.add_book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        // dd($request->all());
        $book = new Book();
        $book->user_id = auth()->id();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->is_active = $request->is_active === 'on' ? 1 : 0;

        $book->save();

        return redirect()->back()->with('success', 'The book has been published');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findorFail($id);
        $book->delete();

        return redirect()->back()->with('success', 'The book has been deleted');
    }

    public function bookingOrder(Request $request)
    {
        $booking = new Booking();
        $booking->book_id = $request->input('book_id');
        $booking->user_id = auth()->id();
        $booking->booking_date = now();
        $booking->booking_status = 0;
        $booking->save();

        if ($booking->wasRecentlyCreated) {
            $user = Auth::user();
            $user->notify(new BookingNotification($user->name));
        }

        return response()->json(['message' => 'Booking order processed successfully']);
    }
}
