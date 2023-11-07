@extends('backend.master')
@section('title')
    Add Blog
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Blog</h2>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{ session('success') }}</span>
                        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Blog Title</label>
                                <div class="col-md-6">
                                    <input type="text" name="title" value="" class="form-control" placeholder="Blog Title"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Discription</label>
                                <div class="col-md-6">
                                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Blog Description"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Blog Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" value="" class="form-control" placeholder="Blog Image"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-6">
                                    <input type="Submit" name="" class="btn btn-success" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


