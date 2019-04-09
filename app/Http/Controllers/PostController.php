<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function list(){
        $posts = Auth::user()->posts;
        $users = User::all();
        return view('posts.lists', compact('posts', 'users'));
    }
    public function create()
    {
        $users = User::all();
        return view('posts.creates', compact('users'));
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->save();
        Session::flash('success', 'Tạo mới bài viết thành công');
        return redirect()->route('posts.lists');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $user = User::all();
        return view('posts.edit', compact('post','user'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->save();
        Session::flash('success', 'Cập nhật bài viết thành công');
        return redirect()->route('posts.lists');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('success', 'Xóa bài viết thành công');
        return redirect()->route('posts.lists');
    }

}

