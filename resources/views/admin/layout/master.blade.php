<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home | American Books</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('admin.partials.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    
    @yield('main-content')
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.partials.footer')
 
<!-- ./wrapper -->

<script src="{{asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/admin/dist/js/app.min.j')}}s"></script>
<script src="{{asset('assets/admin/dist/js/demo.js')}}"></script>

</body>
</html>
