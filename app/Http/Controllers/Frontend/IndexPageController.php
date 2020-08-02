<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;

class IndexPageController extends Controller
{
    public function index(){
        $colleges = DB::table('colleges')->pluck("name","id");
        $cartItems = Cart::content();
        $books = DB::table('books')->take(8)->get();
        // dd($books);
        return view('frontend.index',compact('colleges','cartItems','books'));
    }
    public function getGroups($college_id) 
    {  
        $groups = DB::table("groups")->where("college_id",$college_id)->pluck("name","id");
        // dd($groups);
        return json_encode($groups);
    }
}
