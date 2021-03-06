<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Software;
use Illuminate\Http\Request;

class CategoryResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ("softwarecategory",[
            "title" => 'SoftwareCategory',
            'pagetitle' => "Software Category",
            'category' => Category::all()
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

        return view('createCategory',[
            'title' => 'createcategory',
            'pagetitle' => 'Create Category',
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
        Category::create([
            'category_name' =>$request->category_name,
            'category_code' =>$request->category_code
        ]);
        return redirect(route('Category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'ShowCategory';
        $category = Category::findOrFail($id);
        return view('showCategoryDetail', compact('category','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::findOrFail($id);
        return view('editCategory', compact('category'),  [
            'title' => 'editCategory',
            'pagetitle' => 'Edit Category'
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $category = Category::findOrFail($id);
        $category->update(
            [
                'category_name'=>$request->category_name,
                'category_code'=>$request->category_code,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
            ]
        );

        return redirect(route('Category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('Category.index'));
    }
}
