@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Testimonials
        <small>Add / Edit / Delete / View</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li class="active">Manage Testimonials</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <div class="box-header">
                    <a class="btn btn-default btn-sm" href="{{ route('testimonials-create') }}"><i class="fa fa-plus"></i> Add New</a>
                </div>

                <div class="box-body">
                    <table id="page_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Title</strong></td>
                                <td><strong>Description</strong></td>
                              
                                <td><strong>Action</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr id="rec_{{$testimonial->id}}">
                                <td>{{$testimonial->name}}</td>

                                <td>{{$testimonial->title}}</td>
                               
                                <td>{!!$testimonial->description!!}</td>
                                
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('testimonials-edit', $testimonial->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-default btn-sm delete-row" onclick="ajaxDelete('{{route('testimonials-destroy', $testimonial->id)}}')" id="{{$testimonial->id}}"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="{{ asset('js/custom-functions.js') }}"></script>
<script type="text/javascript">
    ajaxDelete('service-destroy', 'rec_');
</script>

@endsection
