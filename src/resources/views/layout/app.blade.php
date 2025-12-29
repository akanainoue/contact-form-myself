<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <header>
        <div class="header-logo__wrapper">
            <a href="/" class="header-logo-link">Contact Form</a>
        </div>
    </header>
    @yield('main')
</body>
</html>