<html>
<head>
<title>@yield('title')</title>

<link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet">

<link href="{{ asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet">
  <link href="{{ asset('css/toastr.min.css')}}" rel="stylesheet">

</head>

<body>

 

    <header>
        <meta name="_token" content="{{ csrf_token() }}"/>
        {{-- @include('shared.header') --}}
    </header>

    <main role="main" class="container">
      
      @yield('content')
    </main>



<footer class="footer">
{{-- @include('shared.footer') --}}

</footer>



<!--   JS   -->
  <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="{{ url('https://cdn.trackjs.com/agent/v3/latest/t.js')}}"></script>

  <script src="{{ asset('js/toastr.min.js')}}"></script>
<script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
<script>
  @if(Session::has('error'))
  toastr.error("{{Session::get('error')}}")
  @endif
  @if(Session::has('notice'))
  toastr.success("{{Session::get('notice')}}")
  @endif
      </script>
					

</body>

</html>