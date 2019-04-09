<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostApiController extends Controller
{
    public function getAll()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
    public function show($id) {
        return Post::findOrFail($id);
    }
    public function destroy($id) {
        if($id != null) {
            $post = Post::findOrFail($id);
            $post->delete();
        }
    }
    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->user_id = $request->input('user_id');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->save();

        return response()->json($post);
    }
    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->user_id = $request->input('user_id');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->save();
        return response() ->json($post);
    }

}
