<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/weui.css')}}">
    <link rel="stylesheet" href="{{asset('/css/book.css')}}">
    <title>@yield('title')</title>
</head>
<body>
@yield("content")
</body>
<script type="text/javascript" src="{{asset('/js/jquery-1.11.2.min.js')}}"></script>
@yield("my-js")
</html>