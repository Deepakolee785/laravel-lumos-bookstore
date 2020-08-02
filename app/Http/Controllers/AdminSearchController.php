<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminSearchController extends Controller
{
    public function searchByCollege(Request $request){
        $request->validate([
            'search_term' => 'required'
        ]);

        $q = $request->search_term;
        $groups = DB::table('groups')
            ->join('colleges', 'colleges.id', '=', 'groups.college_id')
            ->select('groups.id', 'groups.name', 'colleges.name AS college','colleges.id AS college_id')
            ->where('colleges.name','LIKE','%'.$q.'%')
            ->orWhere('groups.name', 'LIKE', '%'.$q.'%')
            ->get();

            // dd($groups);
            return view('groups.index')
            ->with('groups', $groups);
        }

    public function searchBook(Request $request){
        $request->validate([
            'search_term' => 'required'
        ]);
        $q = $request->search_term;
        
        $books = DB::table('books')
            ->where('title','LIKE','%'.$q.'%')
            ->orWhere('publisher', 'LIKE', '%'.$q.'%')
            ->get();
        // dd($books);
        return view('books.index')
            ->with('books', $books);
    }


    public function searchBookGroupCollege(Request $request){
        $request->validate([
            'search_term' => 'required'
        ]);
        $q = $request->search_term;
        
        $collegeGroupBooks = DB::table('college_group_books AS cgb')
        ->join('colleges AS c', 'c.id', 'cgb.college_id')
        ->join('groups AS g', 'g.id', 'cgb.group_id')
        ->join('books AS b', 'b.id', 'cgb.book_id')
        ->where('c.name','LIKE','%'.$q.'%')
        ->orWhere('g.name', 'LIKE', '%'.$q.'%')
        ->orWhere('b.title', 'LIKE', '%'.$q.'%')
        ->select('cgb.id','cgb.college_id','cgb.group_id','cgb.book_id','b.title as book','c.name AS college','g.name as group')
        ->get(); 
    // dd($collegeGroupBooks);
    return view('college_group_books.index')
        ->with('collegeGroupBooks', $collegeGroupBooks);
    }

    
}
