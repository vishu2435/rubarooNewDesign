<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('blank');
    }
    public function create(){
        $categories=Category::all();
        return view('admin.createPost',['categories'=>$categories]);
    }
    public function createCategory(){
        return view('admin.createCategory');
    }

    public function showPost(){
        $posts=Auth::user()->posts;
        return view('admin.showPost',['posts'=>$posts]);
    }
    public function showCategories(){
        $categories=Auth::user()->categories;
        return view('admin.showCategory',['categories'=>$categories]);
    }

    public function destroy(Post $post,Request $request){
        $this->authorize('delete',$post);

        $post->delete();
        $request->session()->flash('message','Post was Deleted SuccessFully');
        return back();
    }

    public function store(Request $request){
        $inputs=$request->validate([
            'title'=>['required','string','min:8','max:255'],
            'image'=>['bail','mimes:jpg,jpeg,png','file'],
            'body'=>['required','string']
        ]);

            // dd($inputs);
            if($request->image){
                $inputs['image']=$request->image->store('images','public');
            }
            Auth::user()->posts()->create($inputs);
            return back();

    }
    public function storeCategory(Request $request){
        $inputs=$request->validate([
            'name'=>['required','string','min:2','max:30'],
            'description'=>['required','string','max:200']
        ]);
        Auth::user()->categories()->create($inputs);
        return back();
    }
    public function getUpdate(Post $post,Request $request){
            return view('admin.updatePost',['post'=>$post]);
    }
    public function update(Post $post,Request $request){
        $inputs=$request->validate([
            'title'=>['required', 'string'],
            'image'=>['mimes:jpg,jpeg,png','file'],
            'body'=>['string']
        ]);

        if($request->image){
            $inputs['image']=$request->image->store('images','public');
            $post->image=$inputs['image']    ;
        }
        $post->title=$inputs['title'];
        $post->body=$inputs['body'];
        $post->update();
        $request->session()->flash('message','Post has been updated SuccessFully');
        return redirect()->route('post.user');
    }
    public function getUpdateCategory(Category $category){
        return view('admin.updateCategory',['category'=>$category]);
    }
    public function updateCategory(Category $category,Request $request){
        $inputs=$request->validate([
            'name'=>['required','string','min:2','max:30'],
            'description'=>['required','string','max:200']
        ]);
        $category->name=$inputs['name'];
        $category->description=$inputs['description'];
        $category->update();
        $request->session()->flash('message','Category has been updated SuccessFully');
        return redirect()->route('category.user');

    }

}
