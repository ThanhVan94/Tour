<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('admin.layouts.head')
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('admin.layouts.header')
    <div class="app-body">
        @include('admin.layouts.vertical')
        <main class="main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>

                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="index.html">
                            <i class="icon-graph"></i> &nbsp;Dashboard
                        </a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i> &nbsp;Settings
                        </a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div id="ui-view">
                      @yield('content')
                </div>
            </div>
        </main>

    </div>
        @include('admin.layouts.footer')

        <script src="{{asset('/admin/vendors/jquery/js/jquery.min.js')}}"></script>
        <script src="{{asset('/admin/vendors/popper.js/js/popper.min.js')}}"></script>
        <script src="{{asset('/admin/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/admin/vendors/pace-progress/js/pace.min.js')}}"></script>
        <script src="{{asset('/admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('/admin/vendors/%40coreui/coreui-pro/js/coreui.min.js')}}"></script>
    </body>

</html>