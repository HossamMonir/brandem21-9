@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Work Details
            <small>Add</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="{{ route('work-index') }}">Manage Work</a></li>
            <li><a href="{{ route('work-details-index', $work_id) }}">Manage Work Details</a></li>
            <li class="active">Add Work Details</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <form method="post" action="{{ route('work-details-store', $work_id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <input type="hidden" name="work_id" id="work_id" value="{{ $work_id }}">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" name="content" id="content"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input class="form-control" name="youtube" type="text" id="youtube">
                            </div>
                            <div class="form-group">
                                <label for="vimeo">Vimeo</label>
                                <input class="form-control" name="vimeo" type="text" id="vimeo">
                            </div>
                            <div class="form-group">
                                <label for="image">Image (1920x1080px)</label>
                                <input class="form-control" name="image" type="file" id="image">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input class="form-control" name="type" type="text" id="type">
                            </div>
                            <div class="form-group">
                                <label for="display_order">Display Order</label>
                                <input class="form-control" name="display_order" type="text" id="display_order">
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
