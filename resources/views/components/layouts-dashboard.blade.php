
@include('layouts.partials.head')

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layouts.partials.header')

    @include('layouts.partials.navbar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">


        <div class="page-content">
            <div class="container-fluid">

                {{ $slot }}

            </div> <!-- container-fluid -->
        </div>



        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <span class="colored">Negoin</span> .
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-primary"></i> by
                            . <a href="https://buildandservice.tech/" target="blank"><span class="colored">Build and Service</span></a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


@include('layouts.partials.sidebar')
@include('layouts.partials.footer')
