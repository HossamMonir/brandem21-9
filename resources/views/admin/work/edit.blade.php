@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Work
            <small>Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="{{ route('work-index') }}">Manage Work</a></li>
            <li class="active">Edit Work</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <form method="post" action="{{ route('work-update', $work->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" name="title" type="text" id="title"
                                    value="{{ $work->title }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image (100x100px)</label>
                                @if ($work->image)
                                    <br>
                                    <img src="{{ asset('images/work/' . $work->image) }}" width="100">
                                @endif
                                <input class="form-control" name="image" type="file" id="image">
                            </div>
                            <div class="form-group">
                                <label for="image2">Image 2 (100x100px)</label>
                                @if ($work->image2)
                                    <br>
                                    <img src="{{ asset('images/work/' . $work->image2) }}" width="100">
                                @endif
                                <input class="form-control" name="image2" type="file" id="image2">
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input class="form-control" name="subtitle" type="text" id="subtitle"
                                    value="{{ $work->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" name="content" id="content">{!! $work->content !!}</textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label for="client">Client</label>
                                <input class="form-control" name="client" type="text" id="client"
                                    value="{{ $work->client }}">
                            </div>
                            <div class="form-group">
                                <label for="client_logo">Client Logo (300x300px)</label>
                                @if ($work->client_logo)
                                    <br>
                                    <img src="{{ asset('images/work/' . $work->client_logo) }}" width="100">
                                @endif
                                <input class="form-control" name="client_logo" type="file" id="client_logo">
                            </div> --}}
                            <div class="form-group">
                                <label for="client">Client</label>
                                <select name="client_id" class="form-select" aria-label="Default select example">

                                    @if ($clients && $clients->count() > 0)
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="client">Services</label>
                                <select name="service_id" class="form-select" aria-label="Default select example">
                                    @if ($services && $services->count() > 0)
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sector">Sector</label>
                                <input class="form-control" name="sector" type="text" id="sector"
                                    value="{{ $work->sector }}">
                            </div>
                            <div class="form-group">
                                <label for="region">Region</label>
                                <input class="form-control" name="region" type="text" id="region"
                                    value="{{ $work->region }}">
                            </div>
                            <div class="form-group">
                                <label for="capabilities">Capabilities</label>
                                <textarea class="form-control" name="capabilities" id="capabilities">{!! $work->capabilities !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_title">SEO Title</label>
                                <input class="form-control" name="meta_title" type="text" id="meta_title"
                                    value="{{ $work->meta_title }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">SEO Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description">{{ $work->meta_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">SEO Keywords</label>
                                <textarea class="form-control" name="meta_keywords" id="meta_keywords">{{ $work->meta_keywords }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="og_image">SEO Image (1920x1080px)</label>
                                @if ($work->og_image)
                                    <br>
                                    <img src="{{ asset('images/seo/' . $work->og_image) }}" width="100">
                                @endif
                                <input class="form-control" name="og_image" type="file" id="og_image">
                            </div>
                            <div class="form-group">
                                <label for="featured">Featured</label>
                                <input class="form-control" name="featured" type="text" id="featured"
                                    value="{{ $work->featured }}">
                            </div>
                            <div class="form-group">
                                <label for="display_order">Display Order</label>
                                <input class="form-control" name="display_order" type="text" id="display_order"
                                    value="{{ $work->display_order }}">
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
