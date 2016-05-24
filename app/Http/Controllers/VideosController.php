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
        return view('videos.index');
    }

    /**
     * Show all videos by year
     *
     * @return \Illuminate\Http\Response
     */
    public function archive()
    {
        return view('videos.index');
    }

    /**
     * Show all videos in a category
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        return view('videos.index');
    }

    /**
     * Show a specific video based on slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $video = Video::where('slug', $slug)->first();
        $relatedVideos = $video->relatedVideos()->get();
        return view('videos.videoitem', ['video' => $video, 'relatedVideos' => $relatedVideos]);
    }
}
