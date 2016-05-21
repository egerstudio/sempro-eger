<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Video;
use App\Category;
use DB;

class VideosController extends Controller
{
    /**
     * Show all videos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$videos = Video::paginate(9);
        $categories = Category::all();
    	return view('videos.index',['videos' => $videos,'categories' => $categories]);
    }

    /**
     * Show all videos in a specific category based on slug
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryIndex($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $videos = Video::where('category_id',$category->id)->paginate(9);
        $categories = Category::all();
        return view('videos.index',['videos' => $videos,'categories' => $categories]);
    }

    /**
     * Show all videos in archive based on year
     *
     * @return \Illuminate\Http\Response
     */
    public function archiveIndex($year)
    {
        $videos = Video::whereYear('youtube_date','=',$year)->paginate(9);
        $categories = Category::all();
        return view('videos.index',['videos' => $videos,'categories' => $categories]);
    }

    /**
     * Show a specific video based on slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    	$video = Video::where('slug',$slug)->first();
        $categories = Category::all();
        $relatedVideos = $video->relatedVideos()->get();
    	return view('videos.videoitem',['video' => $video,'categories' => $categories,'relatedVideos' => $relatedVideos]);
    }
}
