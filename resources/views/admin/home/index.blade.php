@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Manage HomePage
            <small>Add / Edit / Delete / View</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li class="active">Manage HomePage Sections</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <div class="box-header">
                        <a class="btn btn-default btn-sm" href="{{ route('homepage-create') }}"><i class="fa fa-plus"></i>
                            Add New Section</a>
                    </div>

                    <div class="box-body">
                        <table id="#table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><strong>Title</strong></td>
                                    <td><strong>Title 2</strong></td>
                                    <td><strong>Color</strong></td>
                                    <td><strong>Image</strong></td>
                                    <td><strong>Subtitle</strong></td>
                                    <td><strong>Text</strong></td>
                                    <td><strong>Feautred</strong></td>
                                    <td><strong>Order</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach ($homes as $home)
                                    <tr id="rec_{{ $home->id }}">
                                        <td>{{ $home->section_title }}</td>
                                        <td>{{ $home->section_title2 }}</td>
                                        <td>{{ $home->section_color }}</td>
                                        <td>
                                            @if ($home->section_image)
                                                <img src="{{ asset('images/homepage/' . $home->section_image) }}"
                                                    width="100">
                                            @endif
                                        </td>
                                        <td>{{ $home->section_subtitle }}</td>
                                        <td>{!! $home->section_text !!}</td>
                                        <td>{{ $home->featured }}</td>

                                        <td>{{ $home->display_order }}</td>
                                        <td>
                                            <a class="btn btn-default btn-sm"
                                                href="{{ route('homepage-edit', $home->id) }}"><i class="fa fa-pencil"></i>
                                                Edit</a>
                                            <a class="btn btn-default btn-sm delete-row"
                                                onclick="ajaxDelete('{{ route('homepage-destroy', $home->id) }}')"
                                                id="{{ $home->id }}"><i class="fa fa-trash"></i> Delete</a>
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
        ajaxDelete('client-destroy', 'rec_');
    </script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#tablecontents").sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function(e) {
                    order();
                }
            });

            functiono order() {
                var order = [];
                var token = $('meta[name="csrf-token"]').attr('content');
                $('tr.row1').each(function(index, element) {
                    order.push({
                        id: $(this).attr('data-id'),
                        order: index
                    });
                });

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "{{ url('order') }}",
                    data: {
                        display_order: order,
                        _token: token
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            console.log(response);
                        } else {
                            console.log(response);
                        }
                    }
                });
            }
        });
    </script>
@endsection
