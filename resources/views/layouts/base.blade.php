<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title ?? config('app.name') }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.ico" />
  @livewireStyles
</head>
<body>
    <div class="container-scroller">    
    <x-navbar></x-navbar>
        <div class="container-fluid page-body-wrapper">
            <x-sidebar></x-sidebar>
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('body')
                    </div>
                    <x-footer></x-footer>                
                </div>
        <!-- main-panel ends -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
    <script src="/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
  
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <!-- endinject -->
    

    @yield('script')
    <!-- End custom js for this page-->
    @livewireScripts
</body>

</html>