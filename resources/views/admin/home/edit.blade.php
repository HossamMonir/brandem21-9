@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage HomePage Section
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('homepage-index') }}">Manage HomePage Sections</a></li>
        <li class="active">Edit HomePage Section</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('homepage-update', $home->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="section_title">Section Title</label>
                            <input class="form-control" name="section_title" type="text" id="section_title" value="{{ $home->section_title }}">
                        </div>
                        <div class="form-group">
                            <label for="section_title2">Section Title 2</label>
                            <input class="form-control" name="section_title2" type="text" id="section_title2" value="{{ $home->section_title2 }}">
                        </div>
                        <div class="form-group">
                            <label for="section_color">Section Color</label>
                            <input class="form-control" name="section_color" type="text" id="section_color" value="{{ $home->section_color }}">
                        </div>
                        <div class="form-group">
                            <label for="section_image">Section Image (1920x1080px)</label>
                            @if($home->section_image)
                            <br>
                            <img src="{{ asset('images/homepage/' . $home->section_image) }}" width="100">
                            @endif
                            <input class="form-control" name="section_image" type="file" id="section_image">
                        </div>
                        <div class="form-group">
                            <label for="section_subtitle">Section Subtitle</label>
                            <input class="form-control" name="section_subtitle" type="text" id="section_subtitle" value="{{ $home->section_subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="section_text">Section Text</label>
                            <textarea class="form-control" name="section_text" id="section_text">{!! $home->section_text !!}</textarea>
                        </div>
                         <div class="form-group">
                            <label for="section_image">Featured</label>
                            <input class="form-control" name="featured" type="text" id="featured" value="{{ $home->featured }}">
                        </div>
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input class="form-control" name="display_order" type="text" id="display_order" value="{{ $home->display_order }}">
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