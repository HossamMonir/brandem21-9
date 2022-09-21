@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Blog
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('blog-index') }}">Manage Blog</a></li>
        <li class="active">Edit Blog</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('blog-update', $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" type="text" id="title" value="{{$blog->title}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Image (100x100px)</label>
                            @if($blog->image)
                            <br>
                            <img src="{{ asset('images/blog/' . $blog->image) }}" width="100">
                            @endif
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea class="form-control" name="text" id="text">{!! $blog->text !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="offer">Offer</label>
                            <textarea class="form-control" name="offer" id="offer">{!! $blog->offer !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="turnto">Turnto</label>
                            <textarea class="form-control" name="turnto" id="turnto">{!! $blog->turnto !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="featured">Featured</label>
                            <input class="form-control" name="featured" type="text" id="featured" value="{{$blog->featured}}">
                        </div>
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input class="form-control" name="display_order" type="text" id="display_order" value="{{ $blog->display_order }}">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection