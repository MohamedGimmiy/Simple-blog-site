<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class c_post extends Controller
{
    //
    public function showpost(){
        $posts = Post::paginate(2);
        return view('posts.posts', compact('posts'));
    }
    public function addpost(){
        $categories = Category::all();
        return view('admin.posts', compact('categories'));
    }
    public function insertpost(Request $request){
        //
        $request->validate([
            'title' => 'required|min:4',
            'content' => 'required|min:4'
        ]);
        $addpost = new Post;
        $addpost->title = request('title');
        $addpost->content = request('content');
        $addpost->post_user = request('userid');
        $addpost->post_cat = request('catid');
        $addpost->save();

        return redirect('posts');
    }
    public function editpost($id){
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.editpost', \compact('categories', 'post'));
    }


    public function updatepost($id){
        $updatepost = Post::find($id);
        $updatepost->title = request('title');
        $updatepost->content = request('content');
        $updatepost->post_user = request('userid');
        $updatepost->post_cat = request('catid');
        $updatepost->save();
        return redirect('posts');
    }


}
