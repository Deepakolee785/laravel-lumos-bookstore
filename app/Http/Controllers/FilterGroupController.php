<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FilterGroupController extends Controller
{
    public function getGroup($id)
    {
        $groups = DB::table("groups")->where("college_id",$id)->pluck("name","id");
        return json_encode($groups);
    }
}
