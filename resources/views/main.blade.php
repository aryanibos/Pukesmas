@include('partials.header')
@include('partials.navbar')
<div class="container-fluid page-body-wrapper">
    @include('partials.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        @include('partials.footer')
    </div>
    <!-- main-panel ends -->
</div>

<!-- plugins:js -->
@include('partials.script')

</body>

</html>
