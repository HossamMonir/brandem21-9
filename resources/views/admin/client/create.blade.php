@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Client
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('blog-index') }}">Manage Client</a></li>
        <li class="active">Add Client</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('client-store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Client name</label>
                            <input class="form-control" name="client_name" type="text" id="client_name">
                        </div>
                        <div class="form-group">
                            <label for="image">Logo (100x100px)</label>
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                       
                        <div class="form-group">
                            <label for="featured">Email</label>
                            <input class="form-control" name="email" type="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="featured">Phone </label>
                            <input class="form-control" name="phone" type="text" id="phone">
                        </div>
                          <div class="form-group">
                            <label for="featured">Projects </label>
                            <input class="form-control" name="projects" type="text" id="projects">
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