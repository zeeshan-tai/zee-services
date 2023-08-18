<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-xxl bg-white p-0">
  <!-- begin header here -->
  @include('admin.partials.header')
  <!-- end header here -->

  <!-- begin sidebar here -->
  @include('admin.partials.sidebar')
  
        @yield('dashboard')
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- begin footer here -->
  @include('admin.partials.footer')
  <!-- /.content-wrapper -->
</body>
</div>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  </div>

  
  
 
<!-- ./wrapper -->

<script src="assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="assets/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/admin/dist/js/app.min.js"></script>
<script src="assets/admin/dist/js/demo.js"></script>

</body>
</html>
