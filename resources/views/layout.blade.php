<!DOCTYPE html>
<html lang="es">
<head>

<body>
Menu
<ul>
    <li><a href="{{route('register')}}">Registro de usuario</a></li>
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('about')}}">Acerca de</a></li>
    <li><a href="{{route('blog.index')}}">Blog</a></li>
</ul>
<div>
    @yield('content')
</div>
</body>

    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" style="margin-top: 100px">

    @yield('content')
</div>
<style type="text/css">
    .table {
        border-top: 2px solid #ccc;

    }
</style>
</body>
</html>
