@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Slider
        <small>Add / Edit / Delete / View</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li class="active">Manage Slider Images</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <div class="box-header">
                    <a class="btn btn-default btn-sm" href="{{ route('slider-images-create') }}"><i class="fa fa-plus"></i> Add New</a>
                </div>

                <div class="box-body">
                    <table id="page_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Image</strong></td>
                                <td><strong>Video</strong></td>
                                <td><strong>Title</strong></td>
                                <td><strong>Title 2</strong></td>
                                <td><strong>Link</strong></td>
                                <td><strong>Order</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slider_images as $slider)
                            <tr id="rec_{{$slider->id}}">
                                <td>
                                    @if($slider->image)
                                    <img src="{{ asset('images/slider/' . $slider->image) }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    @if($slider->video)
                                    <iframe class="videoContainer__video" width="250" height="150" src="https://www.youtube.com/embed/{{$slider->video}}" frameborder="0" allowfullscreen=""></iframe>
                                    @endif
                                </td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->title2}}</td>
                                <td>{{$slider->link}}</td>
                                <td>{{$slider->display_order}}</td>
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('slider-images-edit', $slider->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-default btn-sm delete-row" onclick="ajaxDelete('{{route('slider-images-destroy', $slider->id)}}')" id="{{$slider->id}}"><i class="fa fa-trash"></i> Delete</a>
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

@endsection
