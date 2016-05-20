<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Video;
use DB;

class VideosController extends Controller
{
    public function index()
    {
    	$videos = Video::paginate(9);
    	return view('videos.index',['videos' => $videos]);
    }

    public function show($slug)
    {
    	$video = Video::where('slug',$slug)->first();
    	return view('videos.videoitem',compact('video'));
    }
}
