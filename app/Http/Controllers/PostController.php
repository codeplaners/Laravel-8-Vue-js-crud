<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

//codeplaners 
class PostController extends Controller
{
    // all posts
    public function index()
    {
        $posts = Post::all()->toArray();
        return array_reverse($posts);
    }
  
    // add post
    public function add(Request $request)
    {
        $post = new Post([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $post->save();
  
        return response()->json('post successfully added');
    }
  
    // edit post
    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }
  
    // update post
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->all());
  
        return response()->json('post successfully updated');
    }
  
    // delete post
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
  
        return response()->json('post successfully deleted');
    }
}
