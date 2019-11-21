<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function follow(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);

    } 
    
}
