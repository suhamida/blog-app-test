@extends('frontend.master')
@section('title','Blogs')
@section('body')

    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section search-result-wrap">
        <div class="container">

            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach($blogs as $blog)
                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="{{route('single',['id'=> $blog->id])}}" class="img-link me-4">
                            <img src="{{asset($blog->image)}}" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
                            <h2><a href="{{route('single',['id'=> $blog->id])}}">{{$blog->title}}</a></h2>
                            <p>{{$blog->description}}.</p>
                            <p><a href="{{route('single',['id'=> $blog->id])}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                    @endforeach
                    <div class="row text-start pt-5 border-top">
                        <div class="col-md-12">
                            <div class="custom-pagination">
                                <span>1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <span>...</span>
                                <a href="#">15</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap mb-4">
                        <form action="#" class="sidebar-search-form">
                            <span class="bi-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @foreach($blogs as $blog)
                                <li>
                                    <a href="{{route('single',['id'=> $blog->id])}}">
                                        <img src="{{asset($blog->image)}}" alt="Image placeholder" class="me-4 rounded">
                                        <div class="text">
                                            <h4>{{$blog->title}}</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Food <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(22)</span></a></li>
                            <li><a href="#">Lifestyle <span>(37)</span></a></li>
                            <li><a href="#">Business <span>(42)</span></a></li>
                            <li><a href="#">Adventure <span>(14)</span></a></li>
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>



    </body>
    </html>

@endsection
