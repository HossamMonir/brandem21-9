@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Service
            <small>Add / Edit / Delete / View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="">Manage Service</a></li>
            <li class="active">Manage Service Details</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <div class="box-header">
                        <a class="btn btn-default btn-sm" href="{{ route('service-details-create', $service_id) }}"><i
                                class="fa fa-plus"></i> Add New</a>
                    </div>

                    <div class="box-body">
                        <table id="page_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><strong>Service</strong></td>
                                    <td><strong>Title</strong></td>
                                    <td><strong>Title2</strong></td>
                                    <td><strong>Color</strong></td>
                                    <td><strong>Image</strong></td>
                                    <td><strong>Subtitle</strong></td>
                                    <td><strong>Text</strong></td>
                                    <td><strong>Featured</strong></td>
                                    <td><strong>Order</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servdetails as $detail)
                                    <tr id="rec_{{ $detail->id }}">
                                        <td>
                                            @foreach ($services as $service)
                                                {{ $service->title }}
                                            @endforeach
                                        </td>
                                        <td>{!! $detail->section_title !!}</td>
                                        <td>{!! $detail->section_title2 !!}</td>
                                        <td>{!! $detail->section_color !!}</td>
                                        <td>
                                            @if ($detail->section_image)
                                                <img src="{{ asset('images/services/' . $detail->section_image) }}"
                                                    width="100">
                                            @endif
                                        </td>
                                        <td>{{ $detail->section_subtitle }}</td>
                                        <td>{!! $detail->section_text !!}</td>
                                        <td>{{ $detail->featured }}</td>
                                        <td>{{ $detail->display_order }}</td>
                                        <td>
                                            <a class="btn btn-default btn-sm"
                                                href="{{ route('service-details-edit', [$service_id, $detail->id]) }}"><i
                                                    class="fa fa-pencil"></i> Edit</a>
                                            <a class="btn btn-default btn-sm delete-row"
                                                onclick="ajaxDelete('{{ route('service-details-destroy', [$service_id, $detail->id]) }}')"
                                                id="{{ $detail->id }}"><i class="fa fa-trash"></i> Delete</a>
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
        ajaxDelete('work-details-destroy', 'rec_');
    </script>
@endsection
