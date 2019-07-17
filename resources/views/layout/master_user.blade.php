<html>
<head>
<title>@yield('title')</title>
<head>

  {{-- job_index cxx --}}
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
  <link href="{{ asset('css/linearicons.css')}}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{ asset('css/nice-select.css')}}" rel="stylesheet">
  <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">
 
  <link href="{{ asset('css/toastr.min.css')}}" rel="stylesheet">

</head>

<body>
    <header>
        <meta name="_token" content="{{ csrf_token() }}"/>
        @include('user.header')
    </header>

    <main role="main" class="container">
        @yield('content')
    </main>



<footer class="footer">
@include('user.footer')

</footer>

{{-- job_index js --}}

<script src="{{ asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/js/easing.min.js')}}"></script>
<script src="{{ asset('js/hoverIntent.js')}}"></script>
<script src="{{ asset('js/superfish.min.js')}}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.sticky.js')}}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('js/parallax.min.js')}}"></script>
<script src="{{ asset('js/mail-script.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

<script src="{{ asset('js/toastr.min.js')}}"></script>
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