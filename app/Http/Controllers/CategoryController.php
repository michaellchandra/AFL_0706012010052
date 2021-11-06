<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function addCategory(){
        return view('category',[
            'title' => 'Category',
            'pagetitle' => 'Category List - Computer Software Seller'
        ]);
    }

}
