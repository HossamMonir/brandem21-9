@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Slider
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('slider-images-index') }}"><i class="fa fa-file-o"></i> Manage Slider Images</a></li>
        <li class="active"><i class="fa fa-file-o"></i> Add Slider Images</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('slider-images-store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="image">Slider Image Horizontal (1920x1080px)</label>
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" type="text" id="title">
                        </div>
                        <div class="form-group">
                            <label for="title2">Title 2</label>
                            <input class="form-control" name="title2" type="text" id="title2">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input class="form-control" name="link" type="text" id="link">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input class="form-control" name="video" type="text" id="video">
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