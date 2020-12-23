<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $posts=Post::orderBy('created_at','desc')->paginate(10);

        return view('blog',['posts'=>$posts,'path'=>'/blog']);
    }
    public function show(Request $request,Post $post){
        $posts=Post::whereNotIn('id',[$post->id])->orderBy('created_at','desc')->limit(3)->get();
        return view('singlePost',['post'=>$post,'path'=>'/blog','posts'=>$posts]);
    }
    public function author(Request $request,$id){
        $posts=User::find($id)->posts()->orderBy('created_at','desc')->paginate(10);
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
