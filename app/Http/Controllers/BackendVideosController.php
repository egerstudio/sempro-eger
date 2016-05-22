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

        $categories = Category::lists('title');
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
        $categories = Category::lists('title');
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
        return redirect('backend/videos')->with([
                'flash_message' => 'Your video has been added',
                'flash_message_important' => true
            ]);
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
        return redirect()->back()->with([
                'flash_message' => 'Your video has been updated'
            ]);
    }


}
