<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'librarian']);
        return view('home');
    }

    public function search()
    {
        return view('search');
    }

    public function listBooks()
    {
        $books = Book::all();
        
        // get books and send it to the blade
        return view('books', ['books' => $books]);
    }

    public function profile()
    {
        $user = User::get();
        return view('userProfile', ['user' => $user]);
    }
}
