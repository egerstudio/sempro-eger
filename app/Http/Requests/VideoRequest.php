<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Route;

class VideoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Get parameters so that we can ignore the slug when updating
        $id = Route::input('videos');
        
        return [
            'youtube_id' => 'required',
            'title' => 'required|min:3',
            'slug' => 'required|alpha_dash|unique:videos,slug,'.$id,
            'category_id' => 'required',
            'youtube_date' => 'date|required'
        ];
    }
}
