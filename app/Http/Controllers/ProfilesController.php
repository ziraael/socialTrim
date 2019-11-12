<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        // fetching users nese e gjen e shfaq nese jo 404 error , e njeh User se e merr prej App\User (line 5)
        // $useri = User::findOrFail($user); commented se u zevendsu me \App\User easier way per findorfail
        return view('profiles.index',compact('user'));
    }
    
    public function edit(User $user){ // ska nevoj per \App\ se e kem implementu nalt line 5

        // $this->authorize('update',$user->profile);

        return view('profiles.edit',compact('user'));
    }
    
    public function update(User $user){  

        $data = request()->validate([
            'title'=> 'required',
            'description'=> '',
            'link'=> 'url',
            'image'=> '',
        ]);

        
        // if request has image per shkak se munet me e bo save pa dasht me ndrru foton e profilit
        if(request('image')){
            $imagePath = request('image')->store('profile','public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000); 
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
            
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }
}
