@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Blog
        <small>Add / Edit / Delete / View</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li class="active">Manage Blog</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <div class="box-header">
                    <a class="btn btn-default btn-sm" href="{{ route('blog-create') }}"><i class="fa fa-plus"></i> Add New</a>
                </div>

                <div class="box-body">
                    <table id="page_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Title</strong></td>
                                <td><strong>Subtitle</strong></td>
                                <td><strong>Image</strong></td>
                                <td><strong>Date</strong></td>
                                <td><strong>Author</strong></td>
                                <td><strong>Category</strong></td>
                                <td><strong>Featured</strong></td>
                                <td><strong>Order</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $b)
                            <tr id="rec_{{$b->id}}">
                                <td>{{$b->title}}</td>
                                <td>{{$b->subtitle}}</td>
                                <td>
                                    <img src="{{ asset('images/blog/' . $b->image) }}" width="100">
                                </td>
                                <td>{{$b->date}}</td>
                                <td>{{$b->author}}</td>
                                <td>{{$b->category}}</td>
                                <td>{{$b->featured}}</td>
                                <td>{{$b->display_order}}</td>
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('blog-edit', $b->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-default btn-sm delete-row" onclick="ajaxDelete('{{route('blog-destroy', $b->id)}}')" id="{{$b->id}}"><i class="fa fa-trash"></i> Delete</a>
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
