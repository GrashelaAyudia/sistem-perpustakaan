<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $active = 'dashboard';
        $tb = Book::count();

        return view('pages.dashboard', compact(['active', 'tb']));
    }
}
