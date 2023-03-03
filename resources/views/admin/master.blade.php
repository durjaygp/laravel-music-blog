<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('backEnd')}}/AdminLTELogo.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('backEnd')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('backEnd')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('backEnd')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('backEnd')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backEnd')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backEnd')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backEnd')}}/iziToast/dist/css/iziToast.min.css" >
    <link rel="stylesheet" href="{{ asset('backEnd') }}/drop/css/dropify.min.css">
    <link rel="stylesheet" href="{{ asset('backEnd') }}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.include.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.include.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.include.footer')
    <!-- End Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('backEnd')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('backEnd')}}/dist/js/adminlte.js"></script>
<script src="{{asset('backEnd')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('backEnd')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('backEnd')}}/dist/js/pages/dashboard2.js"></script>
<script src="{{asset('backEnd')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backEnd')}}/iziToast/dist/js/iziToast.min.js"></script>
<script src="{{asset('backEnd')}}/drop/js/dropify.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
            title: '',
             position:'topRight',
            message: '{{$error}}',
            });
    </script>
    @endforeach

@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
        title: '',
        position:'topRight',
        message: '{{session()->get('success')}}',
    });

    </script>

@endif
<script>
    $('.dropify').dropify();
</script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote({
            placeholder: 'Please Write Your Post Content',
            tabsize: 2,
            height: 300
        })
    })
</script>

</body>
</html>
