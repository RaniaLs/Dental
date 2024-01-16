<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{URL::to('css/boostrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
    <link rel="stylesheet" href="style.css">
    <title>Appointments management</title>
    @yield('styles')
</head>
<body>
@yield('header')
<div class="container">
@yield('content')
</div>
@yield('footer')
@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{URL::to('js/boostrap.min.js')}}"> </script>
</body>
</html>