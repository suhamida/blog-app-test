<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs, $blog;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 1)
        {
            $this->blogs = Blog::all();
        }elseif (auth()->user()->role == 0)
        {
            $this->blogs = Blog::where('user_id',auth()->id())->get();
        }
        return view('backend.admin.blog.manage',[
            'blogs' => $this->blogs
        ]);

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.blog.create',[
            'blogs' => $this->blogs
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::createBlog($request);
        return back()->with('success','Blog created successfully');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('backend.admin.blog.edit',[
            'blog' =>$this->blog
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/blog')->with('success','Blog updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->blog = Blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return back()->with('success','Blog deleted successfully');
        //
    }
}
