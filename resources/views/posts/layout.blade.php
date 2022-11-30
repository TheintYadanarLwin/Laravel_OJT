<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 CRUD Application </title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>