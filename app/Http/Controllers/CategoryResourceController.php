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
        $this->validate($request, [
            'category_name' => 'required|min:5|max:50',
            'category_id' => 'required'
        ]);

        Category::create([
            'category_id' => $request->category_id,
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
    public function show(Category $category)
    {
        //
        $name = "Category List";
        $software = Category::findOrFail($category);
        return view('showCategoryDetail', compact('category', 'category_name'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //

        return view('editCategory',  [
            'title' => 'editCategory',
            'pagetitle' => 'Edit Category',
            'category' => Category::findOrFail($category)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //

        $category = Category::findOrFail($category);
        $category->update(
            [
                'category_name'=>$request->category_name,
                'category_code'=>$request->category_code,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category = Category::findOrFail($category);
        $category->delete();
        return redirect(route('Category.index'));
    }
}
