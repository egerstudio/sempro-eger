<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Youtube;

class AjaxController extends Controller
{
    public function YouTubeDetails(Request $request)
    {
    	$id = $request->id;
    	$video = Youtube::getVideoInfo($id);
    	

    	if($video->kind == 'youtube#video') {
    		// we have a valid video, return the video
    		$data = array(
    			'status' => 'ok',
    			'title' => $video->snippet->title,
    			'slug' => str_slug($video->snippet->title),
    			'description' => $video->snippet->description,
    			'youtube_date' => date('Y-m-d H:i:s',strtotime($video->snippet->publishedAt)),
    		);

    		return json_encode(array($data));
    	}
    	
    }

}
