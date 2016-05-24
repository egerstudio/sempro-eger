<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Youtube;

class AjaxController extends Controller
{

    /**
     * Get YouTubeDetails and prepare them as JSON
     * @param Request $request      A YouTube video ID
     *                              posted to the YouTube v3 API through Alaoyu\Youtube
     *                              Tested against returned objects ->kind to be 'youtube#video'
     *                              before prepared and returned as JSON
     */
    public function YouTubeDetails(Request $request)
    {
        $id = $request->id;
        

        if ($video = Youtube::getVideoInfo($id)) {
            // we have a valid video, return the video
            $data = array(
                'status' => 'ok',
                'title' => $video->snippet->title,
                'slug' => str_slug($video->snippet->title),
                'description' => $video->snippet->description,
                'youtube_date' => date('Y-m-d H:i:s', strtotime($video->snippet->publishedAt)),
                'youtube_preview' => $video->player->embedHtml,
            );
            return json_encode(array($data));
        } else {
            return json_encode(array('status' => 'notfound'));
        }
    }
}
