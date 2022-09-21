@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage About
        <small>Add / Edit / Delete / View</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li class="active">Manage About Sections</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <div class="box-header">
                    <a class="btn btn-default btn-sm" href="{{ route('about-create') }}"><i class="fa fa-plus"></i> Add New Section</a>
                </div>

                <div class="box-body">
                    <table id="page_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Title</strong></td>
                                <td><strong>Title 2</strong></td>
                                <td><strong>Color</strong></td>
                                <td><strong>Image</strong></td>
                                <td><strong>Subtitle</strong></td>
                                <td><strong>Text</strong></td>
                                <td><strong>Feature</strong></td>
                                <td><strong>Order</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($about as $a)
                            <tr id="rec_{{$a->id}}">
                                <td>{{$a->section_title}}</td>
                                <td>{{$a->section_title2}}</td>
                                <td>{{$a->section_color}}</td>
                                <td>
                                    @if($a->section_image)
                                    <img src="{{ asset('images/' . $a->section_image) }}" width="100">
                                    @endif
                                </td>
                                <td>{{$a->section_subtitle}}</td>
                                <td>{!!$a->section_text!!}</td>
                                <td>{{$a->featured}}</td>
                                <td>{{$a->display_order}}</td>
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('about-edit', $a->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-default btn-sm delete-row" onclick="ajaxDelete('{{route('about-destroy', $a->id)}}')" id="{{$a->id}}"><i class="fa fa-trash"></i> Delete</a>
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
