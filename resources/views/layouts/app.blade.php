<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Your stories here</title>

    {{--  <link rel="canonical" href="https://getbootstrap.com/docs/4.2/examples/blog/">  --}}

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    
    @stack('styles')

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css/blog.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @include('includes.navbar')
    </div>

    @yield('content')

    <!-- /.container -->

    @include('includes.footer')
    
    <script src="{{ asset('frontend/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
