<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

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
        return [
            'youtube_id' => 'required',
            'title' => 'required|min:3',
            'slug' => 'required|alpha_dash',
            'category_id' => 'required',
            'youtube_date' => 'date|required'
        ];
    }
}
