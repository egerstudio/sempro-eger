<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Video;
use App\Category;
use App\Http\Requests\VideoRequest;


class BackendVideosController extends Controller
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
     * Show all videos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('youtube_date','desc')->paginate(9);
    	return view('videos.index',compact('videos'));
    }

    /**
     * Create a new video
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::lists('title','id');
        return view('backend.videos.create',compact('categories'));
    }

    /**
     * Edit an existing video
     *

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $categories = Category::lists('title','id');
        return view('backend.videos.edit',['video' => $video, 'categories' => $categories]);
    }

    /**
     * Store a new video
     *
     * @param VideoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        Video::create($request->all());
        dd($request->all());
        flash()->success('Hurrah!', 'Your video is saved', 'success');
        return redirect('backend/videos');
    }

    /**
     * Update an existing video
     *
     * @param VideoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, VideoRequest $request)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());

        if($video->featured == 1) {
            // set this video as featured on front page
            $video->unFeatureOthers();
        }
        
        flash()->success('Yay!', 'Your video is updated');
        return redirect()->back();
    }


}
