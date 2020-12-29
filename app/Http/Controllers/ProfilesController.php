<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Policies\ProfilePolicy;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{


    public function index( $user)
    {
        // dd(User::find($user));
        $user = User::find($user);

        return view('profiles/index',[
            'user' => $user,
        ]);
        
    }

    public function edit(User $user){
        
        $this->authorize('update', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

        $this->authorize('update', $user);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        auth()->user()->profile->update($data);

        return redirect('/profile/{{ $user->id }}');
    }
}
