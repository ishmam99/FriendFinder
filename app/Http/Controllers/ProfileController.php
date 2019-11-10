<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image as Image;
class ProfileController extends Controller
{
   
    public function index(\App\User $user)
    {
        $follows=(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
      
        return view('profiles.index', compact('user','follows'));
       
    }
    public function edit(\App\User $user)
    {

        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }


    public function update(\App\User $user)
    {
        $this->authorize('update', $user->profile);
        $data= request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
           
          ]);
  
          auth()->user()->profile->update($data);
          if (request('image')){

            $imagePath= request('image')->store('profile','public');
            $image=Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();
             auth()->user()->profile->update(['image'=>$imagePath]);
          } 
         
         

          return redirect("/profile/{$user->id}");
    }
    
    
}
