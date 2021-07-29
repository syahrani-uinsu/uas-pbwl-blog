<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Post::all(); 
        return view('post.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
            'post_date' => 'bail|required|unique:tb_post', 
            'post_slug' => 'required', 
            'post_title' => 'required',
            'post_text' => 'required',
            'cat_id' => 'required'

            ],
        
            [ 
            'post_date.required' => 'wajib diisi', 
            'post_slug.required' => 'wajib diisi', 
            'post_title.required' => 'wajib diisi', 
            'post_text.required' => 'wajib diisi', 
            'cat_id.required' => 'wajib diisi' 

            ]); 

        post::create([ 
        'post_date' => $request->post_date, 
        'post_slug' => $request->post_slug, 
        'post_title' => $request->post_title, 
        'post_text' => $request->post_text, 
        'cat_id' => $request->cat_id 
        ]); 

    return redirect('post');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $row = Post::findOrFail($id); 
        return view('post.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
            'post_date' => 'required', 
            'post_slug' => 'required', 
            'post_title' => 'required',
            'post_text' => 'required',
            'cat_id' => 'required'

            ],
        
            [ 
            'post_date.required' => 'wajib diisi', 
            'post_slug.required' => 'wajib diisi', 
            'post_title.required' => 'wajib diisi', 
            'post_text.required' => 'wajib diisi', 
            'cat_id.required' => 'wajib diisi' 

            ]); 

            $row = Post::findOrFail($id); 
            $row->update([
        'post_date' => $request->post_date, 
        'post_slug' => $request->post_slug, 
        'post_title' => $request->post_title, 
        'post_text' => $request->post_text, 
        'cat_id' => $request->cat_id 
        ]); 

    return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $row = Post::findOrFail($id);
        $row->delete(); 

        return redirect('/post');
    }
}
