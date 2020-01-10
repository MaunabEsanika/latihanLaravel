<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUserProfile(User $user){
        return $user->profile()->get();
    }

    public function getAllPosts(){
        return Post::all();
    }

    public function getPost($id){
        return Post::find($id);
    }

    public function getUserPosts(Request $request, $user){
        return Post::where('user_id', $user)->get();
    }

    public function getAllUsers(){
        return Profile::all();
    }
}
