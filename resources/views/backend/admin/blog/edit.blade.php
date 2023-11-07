@extends('backend.master')

@section('title')
    Edit Blog
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Edit Blog</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ session('success') }}</span>
                    <form action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Blog Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" value="{{$blog->title}}"/>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Blog Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="" cols="25" rows="10">{{$blog->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Blog Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control-lg"  />
                                <img src="{{asset($blog->image)}}" alt="" style="height: 60px;" >
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
