@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Slider
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('slider-images-index') }}">Manage Slider Images</a></li>
        <li class="active">Edit Slider Images</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('slider-images-update', $slider->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="image">Slider Image Horizontal (1920x1080px)</label>
                            @if($slider->image)
                            <br>
                            <img src="{{ asset('images/slider/' . $slider->image) }}" width="100">
                            @endif
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" type="text" id="title" value="{{ $slider->title }}">
                        </div>
                        <div class="form-group">
                            <label for="title2">Title 2</label>
                            <input class="form-control" name="title2" type="text" id="title2" value="{{ $slider->title2 }}">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input class="form-control" name="link" type="text" id="link" value="{{ $slider->link }}">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            @if($slider->video)
                            <iframe class="videoContainer__video" width="250" height="150" src="https://www.youtube.com/embed/{{$slider->video}}" frameborder="0" allowfullscreen=""></iframe>
                            @endif
                            <input class="form-control" name="video" type="text" id="video">
                        </div>
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input class="form-control" name="display_order" type="text" id="display_order" value="{{ $slider->display_order }}">
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