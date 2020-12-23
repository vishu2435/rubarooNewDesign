<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
class LoadPosts extends Controller
{
    public function mypost(Request $request){
        $posts=Post::orderBy('created_at','desc')->paginate(10);
        // echo $request->ajax();
        if($request->ajax()){
            foreach($posts as $post){
                $post->username=$post->user->firstname;
                $post->createdTime=Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans(Carbon::now());
            }

           return response()->json(['posts'=>$posts]);
        }
        return view('blog',['posts'=>$posts,'path'=>'/blog']);
    }
}
