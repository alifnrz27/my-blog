<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $request->validate([
            'title'=>'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
        ]);

        if($request->status_id == 'on'){
            $status_id = 1;
        }else{
            $status_id = 2;
        }

        $category_id = 0;
        if($request->category != null){
            $category = Category::where('category', ucfirst($request->category))->first();

            if(!$category){
                Category::create(['category'=>ucfirst($request->category)]);
                $category = Category::where('category', ucfirst($request->category))->first();
            }
            $category_id = $category->id;
        }

        Post::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'slug'=>$request->slug,
            'content'=>$request->content,
            'category_id' => $category_id,
            'status_id'=>$status_id,
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if($post->user_id != auth()->user()->id){
            abort(404);
        }

        $post = Post::with(['category'])->where(['id' => $post->id])->first();

        // dd($post->category->category);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if($post->user_id != auth()->user()->id){
            abort(404);
        }

        $validate = [
            'title'=>'required',
            'slug' => 'required',
            'content' => 'required',
        ];

        if($request->slug != $post->slug){
            $validate['slug'] = 'required|unique:posts';
        }
        $request->validate($validate);

        $category_id = 0;
        if($request->category != null){
            $category = Category::where(['category' => ucfirst($request->category)])->first();
            if(!$category){
                Category::create([
                    'category' => ucfirst($request->category),
                ]);
            }

            $category = Category::where(['category' => ucfirst($request->category)])->first();
            $category_id = $category->id;
        }
        

        if($request->status_id == 'on'){
            $status_id = 1;
        }else{
            $status_id = 2;
        }

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'category_id' => $category_id,
            'status_id' =>$status_id
        ]);

        return redirect('/posts')->with('status', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::where('id', $post->id)->delete();
        return true;
    }

    public function all(){
        $data = Post::with('status')->where(['user_id'=> auth()->user()->id])->get();
        return response()->json($data);
    }
}
