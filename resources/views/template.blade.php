<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Happy Book Store</title>
</head>
<body>
@yield('nav')

<div class="content">
    <div class="upper-content">
        <div class="upper-content-title">
            @yield('content')
        </div>
        <div class="upper-content-categori">
            @yield('category')
        </div>
    </div>
</div>

@extends('footer')
</body>
</html>
