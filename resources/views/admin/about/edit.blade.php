@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage About Section
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('about-index') }}">Manage About Sections</a></li>
        <li class="active">Edit About Section</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('about-update', $about->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="section_title">Section Title</label>
                            <input class="form-control" name="section_title" type="text" id="section_title" value="{{ $about->section_title }}">
                        </div>
                        <div class="form-group">
                            <label for="section_title2">Section Title 2</label>
                            <input class="form-control" name="section_title2" type="text" id="section_title2" value="{{ $about->section_title2 }}">
                        </div>
                        <div class="form-group">
                            <label for="section_color">Section Color</label>
                            <input class="form-control" name="section_color" type="text" id="section_color" value="{{ $about->section_color }}">
                        </div>
                        <div class="form-group">
                            <label for="section_image">Section Image (1920x1080px)</label>
                            @if($about->section_image)
                            <br>
                            <img src="{{ asset('images/' . $about->section_image) }}" width="100">
                            @endif
                            <input class="form-control" name="section_image" type="file" id="section_image">
                        </div>
                        <div class="form-group">
                            <label for="section_subtitle">Section Subtitle</label>
                            <input class="form-control" name="section_subtitle" type="text" id="section_subtitle" value="{{ $about->section_subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="section_text">Section Text</label>
                            <textarea class="form-control" name="section_text" id="section_text">{!! $about->section_text !!}</textarea>
                        </div>
                           <div class="form-group">
                            <label for="display_order">Featured</label>
                            <input class="form-control" name="featured" type="text" id="featured" value="{{ $about->featured }}">
                        </div>
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input class="form-control" name="display_order" type="text" id="display_order" value="{{ $about->display_order }}">
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