<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->
    <main id="main">

        @yield('content')

    </main>
    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- ======= End Footer ======= -->


</body>

</html>
