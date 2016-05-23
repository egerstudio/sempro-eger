<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Category;
use App\Video;
use App\Http\Requests\CategoryRequest;
use Request;


class BackendCategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all categories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('backend.categories.create');
    }

    /**
     * Create a new category
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Edit an existing category
     *
     * @param \App\Category $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.edit',compact('category'));
    }

    /**
     * Store a new category
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        flash()->success('Yay!', 'Your category has been added');
        return redirect('backend/categories');
    }

    /**
     * Update and existing category
     *
     * @param \App\Category $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, CategoryRequest $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        flash()->success('Success!', 'Your category has been updated');
        return redirect()->back();
    }

    /**
     * Delete an existing category
     *
     * @param \App\Category $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id',$id)->with('videos')->first();
        //dd($category);
        if(count($category->videos)) {
            //flash()->persistent('Hold your horses', 'There are videos belonging to this category, you need to move these videos before we can delete the category. Let us do that now.','error');
            $categoriesList = $category::where('id','<>',$id)->lists('title','id');
            return view('backend.categories.move',(['category' => $category, 'categoriesList' => $categoriesList]));
        } else {
            $category->delete();
            flash()->success('Gone!','The category is deleted!');
            return redirect('backend/categories');
        }
        

    }

    public function moveAll(Request $request) 
    {
        $input = $request::all();
        Video::where('category_id', '=', $input['category_id'])->update(['category_id' => $input['newcategory_id']]);
        $category = Category::find($input['category_id']);
        $category->delete();
        flash()->success('Wowza!','All videos are moved, and category is deleted!');
        return redirect('backend/categories');
    }


}
