<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FilterPageController extends Controller
{
    public function index(){
        $colleges = DB::table('colleges')->pluck("name","id");
        return view('frontend.filter', compact('colleges'));
    }

    public function getGroups($college_id) 
    {        
        $groups = DB::table("groups")->where("college_id",$college_id)->pluck("name","id");
        return json_encode($groups);
    }

}
