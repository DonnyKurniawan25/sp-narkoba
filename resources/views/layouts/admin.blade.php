<!DOCTYPE html>
<html>
@include('layouts.adminpartials.head')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.adminpartials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.adminpartials.sidebarmain')

        <!-- Content Wrapper. Contains page content -->
        @include('layouts.adminpartials.contentwrapper')
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <!-- @include('layouts.adminpartials.footer') -->
        <!-- /Footer -->
        <!-- /.control-sidebar -->
    </div>

    <!-- ./wrapper -->
    @include('layouts.adminpartials.scripts')
</body>
</html>
