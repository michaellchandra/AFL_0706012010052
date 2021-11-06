<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    //

    public function viewSoftwareList (){
        return view('softwarelist',[
            'title' => 'softwarelist',
            'pagetitle' => "Software - Computer Software Seller"
        ]);
    }

    
}
