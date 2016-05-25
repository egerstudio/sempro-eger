<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Video;
use App\Category;
use DB;
use Route;
use TNTSearch;

class VideosController extends Controller
{
    /**
     * Show all videos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('videos.index',['page_title' => 'Actors on Actors', 'page_subtitle' => 'viewing all videos']);
    }

    /**
     * Show all videos by year
     *
     * @return \Illuminate\Http\Response
     */
    public function archive()
    {
        return view('videos.index',['page_title' => Route::current()->parameter('year'), 'page_subtitle' => 'Browsing Archive']);
    }

    /**
     * Show all videos in a category
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        return view('videos.index',['page_title' => Route::current()->parameter('category'), 'page_subtitle' => 'Browsing Category']);
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

    

    /**
     * Search for a video
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        TNTSearch::selectIndex('videos.index');
        $result = TNTSearch::searchBoolean($request->input('query'), 1000);
        $videos = Video::whereIn('id', $result['ids'])->paginate(9);
        return view('videos.searchresult',['page_title' => 'Search results', 'page_subtitle' => $request->input('query'), 'videos' => $videos, 'query' => $request->input('query') ]);
    }
}
