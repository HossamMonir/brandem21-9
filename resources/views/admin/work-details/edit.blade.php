@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Work Details
            <small>Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="{{ route('work-index') }}">Manage Work</a></li>
            <li><a href="{{ route('work-details-index', $work_id) }}">Manage Work Details</a></li>
            <li class="active">Edit Work Details</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <form method="post" action="{{ route('work-details-update', [$work_id, $work->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="box-body">
                            <input type="hidden" name="work_id" id="work_id" value="{{ $work->work_id }}">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" name="content" id="content">{!! $work->content !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                @if ($work->youtube)
                                    <iframe class="videoContainer__video" width="250" height="150"
                                        src="https://www.youtube.com/embed/{{ $work->youtube }}" frameborder="0"
                                        allowfullscreen=""></iframe>
                                @endif
                                <input class="form-control" name="youtube" type="text" id="youtube">
                            </div>
                            <div class="form-group">
                                <label for="vimeo">Vimeo</label>
                                @if ($work->vimeo)
                                    <iframe class="videoContainer__video" width="250" height="150"
                                        src="http://vimeo.com/api/oembed/{{ $work->vimeo }}" frameborder="0"
                                        allowfullscreen=""></iframe>
                                @endif
                                <input class="form-control" name="vimeo" type="text" id="vimeo">
                            </div>
                            <div class="form-group">
                                <label for="image">Image (1920x1080px)</label>
                                @if ($work->image)
                                    <br>
                                    <img src="{{ asset('images/work/' . $work->image) }}" width="100">
                                @endif
                                <input class="form-control" name="image" type="file" id="image">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input class="form-control" name="type" type="text" id="type"
                                    value="{{ $work->project_detail_type }}">
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
