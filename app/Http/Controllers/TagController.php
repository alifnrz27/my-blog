<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\TagPost;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        // cek apakah tag sudah ada
        $nameTag = ucfirst($request->tag);
        $tag = Tag::where(['tag'=> $nameTag])->first();

        if(!$tag){
            Tag::create([
                'tag' => $nameTag,
            ]);
            $tag = Tag::where(['tag'=> $nameTag])->first();
        }


        TagPost::create([
            'post_id' => $request->post_id,
            'tag_id' => $tag->id
        ]);

        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        TagPost::where([
            'post_id' => $request->post_id,
            'tag_id' => $request->tag_id
        ])->delete();
        return true;
    }

    public function get($id){
        
        $tag = TagPost::with('tag')->where(['post_id'=>$id])->get();

        if(!$tag){
            return false;
        }

        return response()->json($tag);
    }
}
