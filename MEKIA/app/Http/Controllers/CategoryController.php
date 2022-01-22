<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import Database Library
use App\Models\Category; //import category model
use Session;

class CategoryController extends Controller
{
    public function add(){
        $r=request(); //receive data by GET or POST method
        $addCategory=Category::create([
            'name'=>$r->categoryName,
        ]);
        Session::flash('success',"Category added successfully!");
        Return redirect()->route('addCategory');
    }

}
