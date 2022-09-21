@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Testimonials
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('testimonials-index') }}">Manage Testimonials</a></li>
        <li class="active">Add testimonial</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <form method="post" action="{{ route('testimonials-store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                          
                        <div class="form-group">
                            <label for="offer">Name</label>
                            <input class="form-control" name="name" id="name">
                        </div>
                      
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" type="text" id="title">
                        </div>
                        
                     
                        <div class="form-group">
                            <label for="text">Deacription</label>
                            <textarea class="form-control" name="description" id="description"></textarea>
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