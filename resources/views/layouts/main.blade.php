<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app-name @yield('title')</title>
</head>
<body>
@section('header')
    <header>
        header
    </header>
@show
<div class="container">
    @yield('content')
</div>
@section('footer')
    <footer>
        footer
    </footer>
@show
</body>
</html>
