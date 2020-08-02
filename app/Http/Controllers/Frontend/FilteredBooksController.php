<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Group;
use DB;

class FilteredBooksController extends Controller
{
    public function index(Request $request){
        
        $request->validate([
            'college_id' => 'required',
            'group_id' => 'required'
        ]);

        $college = College::find($request->college_id);
        $group = Group::find($request->group_id);

        // dd($college,$group);

        $books = DB::table('college_group_books AS cgb')
            ->join('colleges AS c', 'c.id', 'cgb.college_id')
            ->join('groups AS g', 'g.id', 'cgb.group_id')
            ->join('books AS b', 'b.id', 'cgb.book_id')
            ->select('b.*','c.name AS college','g.name as group')
            ->where('c.name',$college->name)
            ->where('g.name',$group->name)
            ->get(); 

        return view('frontend.filteredBooks', compact('books'));
    }
}
