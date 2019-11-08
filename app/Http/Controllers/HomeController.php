<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Checkout;
use Auth;

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

    public function checkOut(Request $request)
    {
        $user_id = Auth::user()->id;
        $bookInfo=($request->request->all());
        checkOut::create([
            'book_id' => $request["book_id"],
            'user_id' => $user_id
        ]);
        // get the current user id, Auth::user()->id;
        // create the checkout record
        // query to get all of the books I have checked out
        $books = checkOut::where('user_id', '=', $user_id);
        
        // get books and send it to the blade
        return view('checkOut', ['books' => $books]);
    }

    public function profile()
    {
        $user = User::get();
        return view('userProfile', ['user' => $user]);
    }
}
