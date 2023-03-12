<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $books = Book::all();

        return view('home', compact('books'));
    }

    public function show($id)
    {

        $book = Book::findOrFail($id);

        return view('show', compact('book'));
    }
}
