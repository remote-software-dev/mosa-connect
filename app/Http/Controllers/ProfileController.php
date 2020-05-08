<?php

namespace App\Http\Controllers;

use App\Profile;
use Auth;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $destination_path = 'uploads/';

        $profile = new Profile;
        $profile->user_id = Auth::user()->id;
        $profile->name = $request->input('name');
        $profile->dob = $request->input('dob');


        $file = $request->file('pic');
        $filename = str_random(4) . '-' . $file->getClientOriginalName();
        $file->move($destination_path, $filename);

        //save to db
        $profile->pic = $destination_path . $filename;

        $thumbnail_path = 'uploads/thumbnails/';

        //make thumbnail from first image
        $thumbnail = Image::make($destination_path . $filename)->resize(480, 360);
        $thumbnail->save($thumbnail_path . 'tn-' . $filename);
        $profile->thumbnail = $thumbnail_path . 'tn-' . $filename;

        $profile->occupation = $request->input('occupation');
        // $profile->user->ass
        $profile->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    public function seeFollower(){
        return view('profile.follower');
    }

    public function seeFollowing(){
        return view('profile.following');
    }
}
