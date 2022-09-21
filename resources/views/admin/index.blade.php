@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">Home</li>
    </ol>
</section>

<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-teal"><i class="fa fa-certificate"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Viewer</span>
                    <h3>{{ count($site_views) }}</h3>
                    <span class="info-box-number"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-light-blue"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Last Month</span>
                    <?php
                        $count=0; $i=0;
                        $mon_date=date("Y-m-d", strtotime(date("Y-m-d"))-(86400*30));
                        foreach($site_views as $s) {
                            if($s->login_time >= $mon_date) {
                                $count = $i++;
                            }
                        }
                    ?>
                    <h3>{{$count}}</h3>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-calendar-check"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">This Week</span>
                    <?php
                        $coun=0; $j=0;
                        $mon_date=date("Y-m-d", strtotime(date("Y-m-d"))-(86400*7));
                        foreach($site_views as $s) {
                            if($s->login_time >= $mon_date) {
                                $coun = $j++;
                            }
                        }
                    ?>
                    <h3>{{$coun}}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="fa fa-clock"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Today</span>
                    <?php
                        $cou=0; $k=0;
                        foreach($site_views as $s) {
                            if($s->login_time == date("Y-m-d")) {
                                $cou = $k++;
                            }
                        }
                    ?>
                    <h3>{{$cou}}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <div class="alert alert-info alert-dismissable">
                        Your Device IP : {{\Request::ip()}}
                    </div>
                </div>
                <div class="box-body">
                    <table id="page_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>View Date</strong></td>
                                <td><strong>IP Address</strong></td>
                                <td><strong>Detail</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($site_views as $s)
                            <tr>
                                <td>{{ $s->login_time }}</td>
                                <td>{{ $s->ip_address }}</td>
                                <td>{{ $s->browser }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
