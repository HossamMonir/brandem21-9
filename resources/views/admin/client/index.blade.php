@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Manage Client
        <small>Add / Edit / Delete / View</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}">Home</a></li>
        <li class="active">Manage Client</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="box">

                <div class="box-header">
                    <a class="btn btn-default btn-sm" href="{{ route('client-create') }}"><i class="fa fa-plus"></i> Add New</a>
                </div>

                <div class="box-body">
                    <table id="page_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Client Name</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Phone</strong></td>
                                <td><strong>Projects</strong></td>
                                <td><strong>Image</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr id="rec_{{$client->id}}">
                                <td>{{$client->name}}</td>
                                 <td>{{$client->email}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->projects}}</td>
                                <td>
                                    <img src="{{ asset('images/client/' . $client->logo) }}" width="100">
                                </td>
                               
                                
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('client-edit', $client->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-default btn-sm delete-row" onclick="ajaxDelete('{{route('client-destroy', $client->id)}}')" id="{{$client->id}}"><i class="fa fa-trash"></i> Delete</a>
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

@endsection
