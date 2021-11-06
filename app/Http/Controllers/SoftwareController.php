<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;
use Exception;

class SoftwareController extends Controller
{
    //

    public function viewSoftwareList (){
        return view('softwarelist',[
            'title' => 'softwarelist',
            'pagetitle' => "Software - Computer Software Seller",
            'software' => Software::all()
        ]);
    }

    public function addSoftwareList(){
        return view('createSoftwarelist',[
            'title' => 'addSoftwareList',
            'pagetitle' => "Add Software - Computer Software Seller"
        ]);

    }

    public function addSoftwareData(Request $request){

        
        $software = new Software();
        $software->name = $request->input('name');
        $software->platform = $request->input('platform');
        $software->code = $request->input('code');
        $software->id = rand(1,100);
        $software->category_id = rand(101,300);
        $software->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloribus quibusdam vitae nesciunt saepe delectus, nam quae ipsam aspernatur. Blanditiis?";

        $software->save();
        
        return view('softwarelist',[
            'title' => 'softwarelist',
            'pagetitle' => "Software - Computer Software Seller",
            'software' => Software::all()
        ]);
    }

    
}
