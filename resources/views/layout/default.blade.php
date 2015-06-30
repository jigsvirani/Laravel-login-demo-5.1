<!doctype html>
<html>
<head>
<!-- my head section goes here -->
<!-- my css and js goes here -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
<style>
    .login-form{ width: 50%; margin: 0px auto;}
    .form-signup{ width: 50%; margin: 0px auto;}
</style>
</head>
<body>
<div class="container">
  <header> @include('layout.header') </header>
  <div class="contents"> @yield('content') </div>
  <footer> @include('layout.footer') </footer>
</div>
</body>
</html>