@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Service
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('services-index') }}">Manage Service</a></li>
        <li class="active">Add Service</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('services-store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" type="text" id="title">
                        </div>
                        <div class="form-group">
                            <label for="image">Image (100x100px)</label>
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea class="form-control" name="text" id="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="offer">Offer</label>
                            <textarea class="form-control" name="offer" id="offer"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="turnto">Turnto</label>
                            <textarea class="form-control" name="turnto" id="turnto"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="featured">Featured</label>
                            <input class="form-control" name="featured" type="text" id="featured">
                        </div>
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input class="form-control" name="display_order" type="text" id="display_order" value="">
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