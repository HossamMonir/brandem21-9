<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>We Are Brandem - Admin</title>

    <!-- Bootstrap 3.3.2 -->
    <!-- CSS only -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/wysiwyg.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert -->

    <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
 <![endif]-->
</head>

<body class="skin-blue">
    <div class="wrapper">
        @include('admin.layouts.header')

        @include('admin.layouts.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                All rights reserved
            </div>
            <strong>Copyright © <?php echo date('Y'); ?> <a href="javascript:;">We are Brandem</a></strong>
        </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jQuery/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('plugins/jQueryUI/jquery-ui-1.10.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('js/wysiwyg.min.js') }}" type="text/javascript"></script>
    <!-- datatable -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <!-- Sweet alert -->
    <script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('js/custom-functions.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('#page_table').dataTable({
                "order": []
            });
        });

        $(document).ready(function() {
            $('#section_text').wysiwyg();
            $('#meta_description').wysiwyg();
            $('#meta_keywords').wysiwyg();
            $('#text').wysiwyg();
            $('#offer').wysiwyg();
            $('#turnto').wysiwyg();
            $('#content').wysiwyg();
            $('#capabilities').wysiwyg();
        });
    </script>
</body>

</html>
