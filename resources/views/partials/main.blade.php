<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.htmlheader')

<body>

    <div class="container-scroller">

    <!-- Main Sidebar Container -->
    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid page-body-wrapper">

        <!-- Navbar -->
        @include('partials.navbar')
        <!-- /.navbar -->

        <!-- Main content -->
        <div class="main-panel">
        <div class="content-wrapper">

                <!-- Your Page Content Here -->
                @yield('main-content')

        </div><!--/. container-fluid -->

        <!-- Main Footer -->
        @include('partials.footer')
        </div>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    @include('partials.scripts')

</body>
</html>
