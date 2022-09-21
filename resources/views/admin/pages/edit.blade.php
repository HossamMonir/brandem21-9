@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Pages
        <small>Edit {{ $page->page }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('pages-index') }}">Manage Pages</a></li>
        <li class="active">Edit Page {{ $page->page }}</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="POST" action="{{ route('pages-update', $page->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="banner_title">Banner Title</label>
                            <input class="form-control" name="banner_title" type="text" id="banner_title" value="{{ $page->banner_title }}">
                        </div>
                        <div class="form-group">
                            <label for="banner_title2">Banner Title 2</label>
                            <input class="form-control" name="banner_title2" type="text" id="banner_title2" value="{{ $page->banner_title2 }}">
                        </div>
                        <div class="form-group">
                            <label for="banner_image">Banner Image (1920x1080px)</label>
                            @if($page->banner_image)
                            <br>
                            <img src="{{ asset('images/' . $page->banner_image) }}" width="100">
                            @endif
                            <input class="form-control" name="banner_image" type="file" id="banner_image">
                        </div>
                        <div class="form-group">
                            <label for="banner_subtitle">Banner Subtitle</label>
                            <input class="form-control" name="banner_subtitle" type="text" id="banner_subtitle" value="{{ $page->banner_subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content">{{ $page->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_title">SEO Title</label>
                            <input class="form-control" name="meta_title" type="text" id="meta_title" value="{{ $page->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">SEO Description</label>
                            <textarea class="form-control" name="meta_description" id="meta_description">{{ $page->meta_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">SEO Keywords</label>
                            <textarea class="form-control" name="meta_keywords" id="meta_keywords">{{ $page->meta_keywords }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="og_image">SEO Image (1200x630px)</label>
                            @if($page->og_image)
                            <br>
                            <img src="{{ asset('images/seo/' . $page->og_image) }}" width="100">
                            @endif
                            <input class="form-control" name="og_image" type="file" id="og_image">
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