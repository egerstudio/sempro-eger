<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BackendController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function backend()
    {
        return view('backend');
    }

    /**
     * Edit the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile()
    {
        flash()->success('Updated!', 'We have updated your details');
        return view('backend.profile.index');
    }

    /**
     * Update the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()
    {

        return view('backend.profile.index');
    }

}
