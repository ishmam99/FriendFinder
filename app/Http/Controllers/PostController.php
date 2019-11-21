<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Post;
use App\User;
use DB;
use App\Profile;
use Intervention\Image\Facades\Image as Image;
class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $posts_per_page = 3;
    public function index(Request $request)
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
        $friends=Profile::whereIn('id',$users)->with('user')->get();
        $posts=Post::whereIn('user_id',$users)->with('user')->latest()->paginate($this->posts_per_page);
        if($request->ajax()) {
            return [
                'posts' => view('posts.ajax.index')->with(compact('posts'))->render(),
                'next_page' => $posts->nextPageUrl()
            ];
        }
        return view('posts.index',compact('people','posts','friends'));
    }
    public function test(Request $request)
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
        $friends=Profile::whereIn('id',$users)->with('user')->get();
        $posts=Post::whereIn('user_id',$users)->with('user')->latest()->paginate($this->posts_per_page);
        if($request->ajax()) {
            return [
                'posts' => view('posts.ajax.index')->with(compact('posts'))->render(),
                'next_page' => $posts->nextPageUrl()
            ];
        }
        return view('layouts.test',compact('people','posts','friends'));
    }

    public function friend()
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
        $friends=Profile::whereIn('id',$users)->with('user')->get();
       
        return view('newsfeed.friends',compact('people','friends'));
    }

    public function follower()
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $friends=Profile::whereIn('id',$users)->with('user')->get();
        $follower=auth()->user()->profile->followers->all();
        //dd($follower);
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
     //   $friends=Profile::whereIn('id',$users)->with('user')->get();
       
        return view('newsfeed.follower',compact('people','friends','follower'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data= request()->validate([
          'caption'=>'required',
          'image'=>'required | image',
        ]);


        
        $imagePath= request('image')->store('uploads','public');
        $image=Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();
        auth()->user()->posts()->create([
          'caption'=> $data['caption'],
          'image'=> $imagePath
          ]);

          return redirect('/profile/'.auth()->user()->id);
    }
    public function show( \App\Post $post)
    {
        return view('posts.show' , compact('post'));
    }
}
