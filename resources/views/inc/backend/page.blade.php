@include('inc.backend.header')

@include('inc.backend.sidebar')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        @yield('content')
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@include('inc.backend.footer')


