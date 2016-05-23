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
        
        if($featuredVideo = Video::where('featured',1)->first()) {
            $videos = Video::where('id','<>',$featuredVideo->id)->orderby('youtube_date','desc')->paginate(9);
            return view('videos.index',['videos' => $videos, 'featuredVideo' => $featuredVideo]);
        } else {
            $videos = Video::orderBy('youtube_date','desc')->paginate(9);
            return view('videos.index',['videos' => $videos]);
        }
    	
    }

    /**
     * Show all videos in a specific category based on slug
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryIndex($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $videos = Video::where('category_id',$category->id)->orderBy('youtube_date','desc')->paginate(9);
        return view('videos.index',compact('videos'));
    }

    /**
     * Show all videos in archive based on year
     *
     * @return \Illuminate\Http\Response
     */
    public function archiveIndex($year)
    {
        $videos = Video::whereYear('youtube_date','=',$year)->orderBy('youtube_date','desc')->paginate(9);
        return view('videos.index',compact('videos'));
    }

    /**
     * Show a specific video based on slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    	$video = Video::where('slug',$slug)->first();
        $relatedVideos = $video->relatedVideos()->get();
    	return view('videos.videoitem',['video' => $video,'relatedVideos' => $relatedVideos]);
    }
}
