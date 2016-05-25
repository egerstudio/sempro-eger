<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UserRequest extends Request
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
        $password = Auth::user()->password;
        
        return [
            'name' => 'required',
            'email' => 'required|email',
            'newpassword' => 'same:newpasswordrepeat|required_with:password|different:password',
            'newpasswordrepeat' => 'required_with:newpassword',
            'password' => 'required_with:newpassword|hash:'.$password,

        ];
    }
}
