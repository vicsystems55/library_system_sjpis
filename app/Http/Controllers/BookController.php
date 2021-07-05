<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    //

    public function add_book(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'admin_no' => ['required', 'string', 'max:255', 'unique:users'],
            // 'user_code' => ['exists:users,user_code'],
            // 'password' => ['required', 'string', 'min:8'],
            
        ]);

        $book_cover = $request->file('book_cover');

        $new_name = rand().".".$book_cover->getClientOriginalExtension();

        $path = $book_cover->move(public_path('book_covers'), $new_name);

        $book_added = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'recommendation' => $request->recommendation,
            'book_cover' => $path,
            'ISBN' => $request->ISBN,
            'category' => $request->category
        ]);

        return back()->with('book_msg', 'Book successfully added');


        
        
    }
}
