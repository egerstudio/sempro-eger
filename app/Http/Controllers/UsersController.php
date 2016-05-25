<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Auth;
use Hash;
use App\Http\Requests\UserRequest;
use Request;

class UsersController extends Controller
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
     * Show a specific user
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {	
        $user = Auth::user();
        return view('backend/profile/edit', ['user' => $user]);
    }

    /**
     * Update a users details
     *
     * @param  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, UserRequest $request)
    {	
    	if($id == Auth::user()->id) {

            $user = Auth::user();
    		$user->email = $request->email;
            $user->name = $request->name;
            if(!empty($request->newpassword)) {
                $passready = Hash::make($request->newpassword);
                $user->password = $passready;
            }
            $user->save();
            flash()->success('Success!', 'Your details are updated!');
    	}
        return redirect()->back();
    }
}
