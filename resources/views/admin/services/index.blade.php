@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Services
            <small>Add / Edit / Delete / View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li class="active">Manage Services</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <div class="box-header">
                        <a class="btn btn-default btn-sm" href="{{ route('services-create') }}"><i class="fa fa-plus"></i>
                            Add New</a>
                    </div>

                    <div class="box-body">
                        <table id="page_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><strong>Title</strong></td>
                                    <td><strong>Image</strong></td>
                                    <td><strong>Text</strong></td>
                                    <td><strong>Offer</strong></td>
                                    <td><strong>Turnto</strong></td>
                                    <td><strong>Featured</strong></td>
                                    <td><strong>Order</strong></td>
                                    <td><strong>Details</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr id="rec_{{ $service->id }}">
                                        <td>{{ $service->title }}</td>
                                        <td>
                                            <img src="{{ asset('images/' . $service->image) }}" width="100">
                                        </td>
                                        <td>{!! $service->text !!}</td>
                                        <td>{!! $service->offer !!}</td>
                                        <td>{!! $service->turnto !!}</td>
                                        <td>{{ $service->featured }}</td>
                                        <td>{{ $service->display_order }}</td>
                                        <td>
                                            <a class="btn btn-default btn-sm"
                                                href="{{ route('service-details-index', $service->id) }}"><i
                                                    class="fa fa-info"></i>
                                                Details</a>
                                        <td>

                                            <a class="btn btn-default btn-sm"
                                                href="{{ route('services-edit', $service->id) }}"><i
                                                    class="fa fa-pencil"></i> Edit</a>
                                            <a class="btn btn-default btn-sm delete-row"
                                                onclick="ajaxDelete('{{ route('services-destroy', $service->id) }}')"
                                                id="{{ $service->id }}"><i class="fa fa-trash"></i> Delete</a>
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
