<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog =Blog::all();
        return view ('blog.index')->withBlog($blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(), [
          'title'=> 'required',
          'post' => 'required',
        ]);


        $blog = New Blog;
        $blog->title =$request->title;
        $blog->post=$request->post;

        $blog->save();

        return redirect()->route('blog.index', $blog->id)->withMessage('berhasil di posting');
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
        $blog=Blog::find($id);
      return view('blog.index')->withBlog($blog);

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
        $blog = Blog::find($id);
        return view('blog.edit')->withBlog($blog);
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
          $this->validate(request(), [
          'title'=> 'required',
          'post' => 'required',
        ]);


        $blog = Blog::find($id);
        $blog->title =$request->input('title');
        $blog->post=$request->input('post');
        $blog->save();
        return redirect()->route('blog.index', $blog->id)->withMessage('berhasil diupdate');
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
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blog.index')->withMessage('berhasil di hapus');
    }
}
