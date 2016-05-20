<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Video;
use App\Category;
use DB;

class VideosController extends Controller
{
    public function index()
    {
    	$videos = Video::paginate(9);
        $categories = Category::all();
    	return view('videos.index',['videos' => $videos,'categories' => $categories]);
    }

    public function show($slug)
    {
    	$video = Video::where('slug',$slug)->first();
        $categories = Category::all();
    	return view('videos.videoitem',['video' => $video,'categories' => $categories]);
    }
}
