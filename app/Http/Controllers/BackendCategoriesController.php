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
     * @param CreateCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        session()->flash('flash_message','Your category has been created');
        return redirect('backend/categories')->with([
                'flash_message' => 'Your category has been updates',
                'flash_message_important' => true
            ]);
    }

    /**
     * Update and existing category
     *
     * @param CreateCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, CategoryRequest $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->back()->with([
                'flash_message' => 'Your category has been updated'
            ]);
    }


}
