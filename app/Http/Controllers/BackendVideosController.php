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
        return redirect()->action('VideosController@index');
    }

    /**
     * Create a new video
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('title', 'id');
        return view('backend.videos.create', compact('categories'));
    }

    /**
     * Edit an existing video
     *
     * @param App\Video $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $categories = Category::lists('title', 'id');
        return view('backend.videos.edit', ['video' => $video, 'categories' => $categories]);
    }

    /**
     * Store a new video
     *
     * @param VideoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        $video = Video::create($request->all());
        if ($video->featured == 1) {
            $video->unFeatureOthers();
        }
        flash()->success('Hurrah!', 'Your video is saved', 'success');
        return redirect()->action('VideosController@index');
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


        if ($video->featured == 1) {
            // set this video as featured on front page
            $video->unFeatureOthers();
        }

        if (empty($request->featured) && $video->featured == 1) {
            $video->unfeatureSelf();
        }
        
        flash()->success('Yay!', 'Your video is updated');
        return redirect()->back();
    }


    /**
     * Delete a video
     *
     * @param App\Video $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        flash()->success('Gone!', 'Your video is deleted', 'success');
        return redirect()->action('VideosController@index');
    }
}
