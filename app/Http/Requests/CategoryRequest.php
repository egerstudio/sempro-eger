<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
        $id = $this->route('categories');

        return [
            'title' => 'required|min:3',
            'slug' => 'required|min:3|unique:categories,slug,'.$id,
        ];
    }
}
