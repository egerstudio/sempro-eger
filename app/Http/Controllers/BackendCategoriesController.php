<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Category;
use App\Http\Requests\CategoryRequest;


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


}
