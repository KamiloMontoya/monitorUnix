<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Monitor">
    <meta name="keywords" content="monitor, unix">
    
    <title>@yield('title','Monitor')</title>
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png')}}">


    @section('styles')
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('css/shared/style.css') }}">
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('css/demo_1/style.css') }}">

    @show
    
    <script>
        var baseURL = '{{ url()->full() }}';
    </script>

</head>
<body>


    <div class="container-scroller">
      
        <div class="container-fluid page-body-wrapper">

            @include('frontend.layout.header.sidebar')
            <div class="main-panel">
              <div class="content-wrapper">

                

                @section('content')

                @show
                
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:partials/_footer.html -->
              <footer class="footer">
                <div class="container-fluid clearfix">
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 </span>
                  </span>
                </div>
              </footer>
              <!-- partial -->
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    
    @section('scripts')

        
    @show
</body>

</html>