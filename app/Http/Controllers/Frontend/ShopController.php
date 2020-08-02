<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Book;
use DB;

class ShopController extends Controller
{
    public function index(){
        // $books = Book::all();
        $books = DB::table('books')->paginate(10);
        return view('frontend.shop', compact('books'));
    }
}
