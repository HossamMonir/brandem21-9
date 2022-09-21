@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Work
            <small>Add / Edit / Delete / View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li class="active">Manage Work</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <div class="box-header">
                        <a class="btn btn-default btn-sm" href="{{ route('work-create') }}"><i class="fa fa-plus"></i> Add
                            New</a>
                    </div>

                    <div class="box-body">
                        <table id="page_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><strong>Title</strong></td>

                                    <td><strong>Content</strong></td>
                                    <td><strong>Image</strong></td>
                                    <td><strong>Clients</strong></td>
                                    <td><strong>Services</strong></td>
                                    <td><strong>Featured</strong></td>
                                    <td><strong>Order</strong></td>
                                    <td><strong>Details</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($work as $w)
                                    <tr id="rec_{{ $w->id }}">
                                        <td>{{ $w->title }}</td>
                                        <td>{{ $w->content }}</td>
                                        <td>
                                            @if ($w->image)
                                                <img src="{{ asset('images/work/' . $w->image) }}" width="100">
                                            @endif
                                        </td>
                                        <td>

                                            {{ $w->client->name ?? 'deleted client' }}

                                        </td>
                                        <td>

                                            {{ $w->service->title ?? 'deleted service' }}

                                        </td>
                                        <td>{{ $w->featured }}</td>
                                        <td>{{ $w->display_order }}</td>
                                        <td>
                                            <a class="btn btn-default btn-sm"
                                                href="{{ route('work-details-index', $w->id) }}"><i class="fa fa-info"></i>
                                                Details</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-default btn-sm" href="{{ route('work-edit', $w->id) }}"><i
                                                    class="fa fa-pencil"></i>
                                                Edit</a>
                                            <a class="btn btn-default btn-sm delete-row"
                                                onclick="ajaxDelete('{{ route('work-destroy', $w->id) }}')"
                                                id="{{ $w->id }}"><i class="fa fa-trash"></i> Delete</a>
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
        ajaxDelete('work-destroy', 'rec_');
    </script>
@endsection
