<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    // if youre not authenticated u cant access anything below
    public function __construct(){
        // krejt metodat auth perpos show
        $this->middleware('auth')->except('show');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads','public');
        
        $image = Image::make(public_path("public/storage/uploads/{$imagePath}"))->fit(1200,1200); 
        $image->save();
        // create the post for this user with this data --^
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect ('profile/'.auth()->user()->id);
    }

    public function show(\App\Post $post){
        return view('posts.show',compact('post'));
    }
}
