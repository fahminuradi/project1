<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageUpload()
    {
    	return view('image.imageUpload');
    }
    public function imageUploadPost(Request $request)
    {
    	request()->validate([
    		'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    	]);

    	$imageName = time().'.'.request()->image->getClientOriginalExtension();

    	request()->image->move(public_path('images'), $imageName);

    	return back()
    		->with('success','Kamu berhasil mengupload fotomu')
    		->with('image',$imageName);
    }
}
