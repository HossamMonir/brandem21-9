@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Service Section
            <small>Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="{{ route('services-index') }}">Manage Service Sections</a></li>
            <li class="active">Add Service Details Section</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <form method="post" action="{{ route('service-details-update', [$service_id, $service->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="box-body">
                            <input type="hidden" name="service_id" id="service_id" value="{{ $service->service_id }}">

                            <div class="form-group">
                                <label for="section_title">Section Title</label>
                                <input class="form-control" name="section_title" type="text"
                                    value="{{ $service->section_title }}" id="section_title">
                            </div>
                            <div class="form-group">
                                <label for="section_title2">Section Title 2</label>
                                <input class="form-control" name="section_title2" value="{{ $service->section_title2 }}"
                                    type="text" id="section_title2">
                            </div>
                            <div class="form-group">
                                <label for="section_color">Section Color</label>
                                <input class="form-control" name="section_color" value="{{ $service->section_color }}"
                                    type="text" id="section_color">
                            </div>
                            <div class="form-group">
                                <label for="section_image">Section Image (1920x1080px)</label>
                                @if ($service->section_image)
                                    <br>
                                    <img src="{{ asset('images/services/' . $service->section_image) }}" width="100">
                                @endif
                                <input class="form-control" name="section_image" type="file" id="section_image">
                            </div>
                            <div class="form-group">
                                <label for="section_subtitle">Section Subtitle</label>

                                <input class="form-control" name="section_subtitle" value="{{ $service->section_title }}"
                                    type="text" id="section_subtitle">
                            </div>
                            <div class="form-group">
                                <label for="section_text">Section text</label>
                                <textarea class="form-control" name="section_text" id="section_text">{!! $service->section_text !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="display_order">Featured</label>
                                <input class="form-control" name="featured" value="{{ $service->featured }}" type="text"
                                    id="featured">
                            </div>
                            <div class="form-group">
                                <label for="display_order">Display Order</label>
                                <input class="form-control" name="display_order" value="{{ $service->display_order }}"
                                    type="text" id="display_order">
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
