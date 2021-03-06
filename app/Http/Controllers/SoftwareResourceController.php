<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Software;

class SoftwareResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view ("softwarelist",[
            "title" => 'SoftwareList',
            'pagetitle' => "Software List",
            'software' => Software::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createSoftwarelist',[
            'title' => 'createSoftwarelist',
            'pagetitle' => "Create Software",
            'software' => Software::all(),
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'software_name' => 'required|min:5|max:50',
            'category_id' => 'required'
        ]);

        Software::create([
            'category_id' => $request->category_id,
            'software_name' =>$request->software_name,
            'software_code' =>$request->software_code,
            'software_platform' =>$request->software_platform,
            'software_description' =>$request->software_description
        ]);
        return redirect(route('Software.index'));

        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return view('showCategoryDetail',[
        //     'software' => Software::where('category_id', $id)->first();
        //     return view()
        // ]);
        $title = 'showSoftware';
            $software = Software::findOrFail($id);
            return view('showSoftware', compact('software','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $software = Software::findOrFail($id);
        //
        return view('editSoftwareList',compact('category','software'),  [
            'title' => 'editSoftwareList',
            'pagetitle' => 'Edit Software List',
            'software' => Software::findOrFail($id)
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $software= Software::findOrFail($id);
        $software->update(
            [
                'category_id' => $request->category_id,
                'software_name' =>$request->software_name,
                'software_code' =>$request->software_code,
                'software_platform' =>$request->software_platform,
                'software_description' =>$request->software_description,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
            ]
        );
        return redirect(route('Software.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $software = Software::findOrFail($id);
        $software->delete();
        return redirect(route('Software.index'));
    }
}
