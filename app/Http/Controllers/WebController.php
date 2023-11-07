<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WebController extends Controller
{
    protected $blogs= [],$blog;

    public function home()
    {
        $this->blogs = Blog::all();
        return view('frontend.home.index',[
            'blogs' => $this->blogs
        ]);
    }

    //
    public function category()
    {
        return view('frontend.pages.category');
    }
    //
    public function blog()
    {
        $this->blogs = Blog::all();
        return view('frontend.pages.blog',[
            'blogs' =>$this->blogs
        ]);
    }
    //
    public function single($id)
    {
        $this->blogs = Blog::find($id);
        return view('frontend.pages.single',[
            'blog' =>$this->blogs,
        ]);
    }
    //
    public function about()
    {
        return view('frontend.pages.about');
    }
    //
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    //

}
