<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class SearchBookController extends Controller
{
    public function index(Request $request){
        
        // dd($request->all());
        $request->validate([
            'query_input' => 'required',
        ]);
        $q = $request->query_input;
        $books = Book::where('title','LIKE','%'.$q.'%')->orWhere('publisher','LIKE','%'.$q.'%')->paginate(10);
        // dd($books);
        return view('Frontend.shop', compact('books','q'));
    }

}
