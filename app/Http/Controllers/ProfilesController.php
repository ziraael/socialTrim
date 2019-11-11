<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        // fetching users nese e gjen e shfaq nese jo 404 error , e njeh User se e merr prej App\User (line 5)
        // $useri = User::findOrFail($user); commented se u zevendsu me \App\User easier way per findorfail
        return view('profiles.index',compact('user'));
    }

    public function edit(User $user){ // ska nevoj per \App\ se e kem implementu nalt line 5
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user,Request $request){

        $user->update(['approved' => 1]);

        $data = request()->validate([
            'title'=> 'required',
            'description'=> '',
            'link'=> 'url',
            'image'=> '',
        ]);

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
