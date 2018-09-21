<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')

   <body class="home1">
    <!-- navbar -->
    @include('layouts.header')
    <!-- end navbar -->
    
    <!-- Slider -->
    @include('layouts.slider')
     <!-- End Slider -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- End of Footer -->
                            
    </body>
</html> 