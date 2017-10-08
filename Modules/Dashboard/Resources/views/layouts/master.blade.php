<?php
$assetspath    = 'modules/'.Module::find('dashboard');
//$assetspath    = Module::assetPath('remotecv');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IBR Software | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
   {{ Html::style($assetspath."/bower_components/bootstrap/dist/css/bootstrap.min.css") }}
    <!-- Font Awesome -->
   {{ Html::style($assetspath."/bower_components/font-awesome/css/font-awesome.min.css") }}
    <!-- Ionicons -->
   {{ Html::style($assetspath."/bower_components/Ionicons/css/ionicons.min.css") }}
    <!-- Theme style -->
   {{ Html::style($assetspath."/dist/css/AdminLTE.min.css") }}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   {{ Html::style($assetspath."/dist/css/skins/_all-skins.min.css") }}
    <!-- Morris chart -->
   {{ Html::style($assetspath."/bower_components/morris.js/morris.css") }}
    <!-- jvectormap -->
   {{ Html::style($assetspath."/bower_components/jvectormap/jquery-jvectormap.css") }}
    <!-- Date Picker -->
   {{ Html::style($assetspath."/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") }}
    <!-- Daterange picker -->
   {{ Html::style($assetspath."/bower_components/bootstrap-daterangepicker/daterangepicker.css") }}
    <!-- bootstrap wysihtml5 - text editor -->
   {{ Html::style($assetspath."/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('dashboard::layouts.blocks.header_nav')
    <!-- Left side column. contains the logo and sidebar -->
    @include('dashboard::layouts.blocks.left_sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('dashboard::layouts.blocks.page_header')
        <!-- Content Header (Page header) -->
        @yield('content')        
    </div>
    <!-- /.content-wrapper -->
    @include('dashboard::layouts.blocks.footer')
    <!-- Control Sidebar -->
    @include('dashboard::layouts.blocks.right_sidebar')    
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{{ Html::script($assetspath.'/bower_components/jquery/dist/jquery.min.js') }}
<!-- jQuery UI 1.11.4 -->
{{ Html::script($assetspath.'/bower_components/jquery-ui/jquery-ui.min.js') }}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
@stack('scripts')
<!-- Bootstrap 3.3.7 -->
{{ Html::script($assetspath.'/bower_components/bootstrap/dist/js/bootstrap.min.js') }}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{ Html::script($assetspath.'/dist/js/pages/dashboard.js') }}
{{ Html::script($assetspath.'/dist/js/adminlte.min.js') }}
<!-- AdminLTE for demo purposes -->
{{ Html::script($assetspath.'/dist/js/demo.js') }}
</body>
</html>
