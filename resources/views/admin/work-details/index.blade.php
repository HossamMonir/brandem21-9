@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage Work
            <small>Add / Edit / Delete / View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="{{ route('work-index') }}">Manage work</a></li>
            <li class="active">Manage Work Details</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <div class="box-header">
                        <a class="btn btn-default btn-sm" href="{{ route('work-details-create', $work_id) }}"><i
                                class="fa fa-plus"></i> Add New</a>
                    </div>

                    <div class="box-body">
                        <table id="page_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><strong>Work</strong></td>
                                    <td><strong>Content</strong></td>
                                    <td><strong>Youtube</strong></td>
                                    <td><strong>Vimeo</strong></td>
                                    <td><strong>Image</strong></td>
                                    <td><strong>Type</strong></td>
                                    <td><strong>Order</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($work as $w)
                                    <tr id="rec_{{ $w->id }}">
                                        <td>
                                            @foreach ($our_work as $work_)
                                                {{ $work_->title }}
                                            @endforeach
                                        </td>
                                        <td>{!! $w->content !!}</td>
                                        <td>
                                            @if ($w->youtube)
                                                <iframe class="videoContainer__video" width="250" height="150"
                                                    src="http://vimeo.com/api/oembed/{{ $w->youtube }}" frameborder="0"
                                                    allowfullscreen=""></iframe>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($w->vimeo)
                                                <iframe class="videoContainer__video" width="250" height="150"
                                                    src="https://www.vimeo.com/embed/{{ $w->vimeo }}" frameborder="0"
                                                    allowfullscreen=""></iframe>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($w->image)
                                                <img src="{{ asset('images/work/' . $w->image) }}" width="100">
                                            @endif
                                        </td>
                                        <td>{{ $w->project_detail_type }}</td>
                                        <td>{{ $w->display_order }}</td>
                                        <td>
                                            <a class="btn btn-default btn-sm"
                                                href="{{ route('work-details-edit', [$work_id, $w->id]) }}"><i
                                                    class="fa fa-pencil"></i> Edit</a>
                                            <a class="btn btn-default btn-sm delete-row"
                                                onclick="ajaxDelete('{{ route('work-details-destroy', [$work_id, $w->id]) }}')"
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
        ajaxDelete('work-details-destroy', 'rec_');
    </script>
@endsection
