@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Testimonial
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li><a href="{{ route('testimonials-index') }}">Manage Testimonial</a></li>
        <li class="active">Edit Testimonial</li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

             <form method="post" action="{{ route('testimonials-update', $testimonial->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    
                    <div class="box-body">
                          
                        <div class="form-group">
                            <label for="offer">Name</label>
                            <input class="form-control" type="text"  name="name" id="name" value="{{$testimonial ->name}}" >
                        </div>
                      
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control"  name="title" type="text" id="title"  value="{{$testimonial ->title}}" >
                        </div>
                        
                     
                        <div class="form-group">
                            <label for="text">Deacription</label>
                            <textarea class="form-control"  name="description" id="description">{!! $testimonial->description !!}</textarea>
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