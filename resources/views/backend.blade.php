<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('moviebackend/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('moviebackend/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet">

  <link href="{{asset('moviebackend/assets/css/bootstrap.min.css" rel="stylesheet')}}" />
  <link href="{{asset('moviebackend/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('moviebackend/assets/demo/demo.css" rel="stylesheet')}}" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('movies.index')}}">
              <i class="now-ui-icons media-1_button-play"></i>
              <p>Movies</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('seats.index')}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Seats</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('halls.index')}}">
              <i class="now-ui-icons tech_tv"></i>
              <p>Halls</p>
            </a>
          </li class="active">
          <li class="active">
            <a href="{{route('timeslots.index')}}">
              <i class="now-ui-icons tech_watch-time"></i>
              <p>Times</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('showings.index')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Show List</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('customers.index')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Customer</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('upcommings.index')}}">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Up Comming</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel p-2" id="main-panel">

     @yield('content1')



      <!-- Navbar -->
      <!-- End Navbar -->



      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
      <script src="{{ asset('select2/js/select2.min.js') }}"type="text/javascript"></script>

  <script src="{{asset('moviebackend/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('moviebackend/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('moviebackend/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('moviebackend/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('moviebackend/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('moviebackend/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('moviebackend/assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('moviebackend/assets/demo/demo.js')}}"></script>
  <script>

    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

</body>

</html>