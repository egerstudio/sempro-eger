<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class BackendCategoriesController extends Controller
{
    /**
     * Show all categories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
    	return view('backend.categories.index',['categories' => $categories]);
    }
}
