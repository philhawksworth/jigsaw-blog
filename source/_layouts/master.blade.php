<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ 'Site Name' }}
    </title>
    {{-- <link rel="icon" href="/favicon.ico"> --}}
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <h1>Parent template</h1>
    @yield('content')

    <script src="/js/main.js"></script>
</body>
</html>
