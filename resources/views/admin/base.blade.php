<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.shortName') }} | @yield('title')</title>
  <!-- core:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
  <!-- endinject -->
  @if(Route::currentRouteName() == 'trade.dashboard')
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <!-- end plugin css for this page -->
  @endif
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

</head>
<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.head.sidebar')

    <div class="page-wrapper">
      <!-- partial:partials/_navbar.html -->
      @include('admin.head.header')
      @yield('content')
      <!-- partial:partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="#" target="_blank">{{ config('app.shortName') }}</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->

    </div>
  </div>

  <!-- core:js -->
  <script src="{{asset('assets/vendors/core/core.js')}}"></script>
  <!-- endinject -->
  @if(Route::currentRouteName() == 'trade.dashboard')
  <!-- plugin js for this page -->
  <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <!-- end plugin js for this page -->

  <!-- custom js for this page -->
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/js/datepicker.js')}}"></script>
  <!-- end custom js for this page -->
  @endif

  @if(Route::currentRouteName() == 'users.create' || Route::currentRouteName() == 'imageEdit.edit')
  <script type="text/javascript">
  jQuery(function($) {
    $(document).ready(function() {
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#passport").change(function() {
        $("#blah").slideDown(3000);
        readURL(this);
      });
    });
  })
  </script>

  @endif

  <script type="text/javascript">
      $(document).ready(function () {
        var width = $('#passportCover').width();
        
        width = width - (width/1.3);
        $('.profile-pic').css({'width': width, 'height': 'auto'});
      })
  </script>
  <!-- inject:js -->
  <script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <!-- endinject -->

</body>
</html>
