@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>Manage Pages<small> edit / view</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li class="active">Manage Pages</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <div class="box-body">
                    <table id="page_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td><strong>Page Name</strong></td>
                                <td><strong>SEO Title</strong></td>
                                <td><strong>SEO Description</strong></td>
                                <td><strong>SEO Keywords</strong></td>
                                <td><strong>SEO Image</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                            <tr>
                                <td>{{$page->page}}</td>
                                <td>{{$page->meta_title}}</td>
                                <td>{{$page->meta_description}}</td>
                                <td>{{$page->meta_keywords}}</td>
                                <td><img src="{{ asset('images/seo/' . $page->og_image) }}" width="100"></td>
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('pages-edit', $page->id) }}"><i class="fa fa-pencil"></i> Edit</a>
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