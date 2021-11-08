<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home',[
            'title' => 'home',
            'pagetitle' => 'Home - Computer Software Seller'
        ]);
    }

    public function about(){
        return view('about',[
            'title' => 'about',
            'pagetitle' => 'About - Computer Software Seller'
        ]);
    }

    

    

  
        
   
    
    // Route::get('/software', function () {
    //     return view('softwarelist',[
    //         'title' => 'softwarelist',
    //         'pagetitle' => "Software - Computer Software Seller"
    //     ]);
    // });
}
