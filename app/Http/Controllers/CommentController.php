<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return view('comments.index');
    }

    public function get($slug){
        
        $post = Post::with('comments')->where(['slug'=>$slug, 'status_id'=>1])->first();

        if(!$post){
            return false;
        }

        $comments = Comment::with('user')->where(['post_id' => $post->id])->orderBy('id', 'desc')->get();

        return response()->json($comments);
    }

    public function getMyPosts(){
        $post = Post::with('comments')->where(['user_id' => auth()->user()->id])->get();
        return response()->json($post);
    }

    public function store(Request $request){
        $post = Post::where(['slug' => $request->slug, 'status_id' => 1])->first();

        if(!$post){
            return false;
        }
        
        Comment::insert([
            'user_id'=>auth()->user()->id,
            'post_id' => $post->id,
            'comment' => $request->comment,
        ]);
        return true;
    }

    public function destroy($id)
    {
        Comment::where('id', $id)->delete();
        return true;
    }
}
