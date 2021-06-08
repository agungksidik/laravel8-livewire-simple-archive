<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title ?? config('app.name') }}</title>  
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="/vendors/jquery-toast-plugin/jquery.toast.min.css">
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
    
    <script src="/vendors/base/vendor.bundle.base.js"></script>
    
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
   
    @yield('script')
    @livewireScripts
</body>

</html>