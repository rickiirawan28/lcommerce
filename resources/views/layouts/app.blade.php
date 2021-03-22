<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/71c51b3f96.js" crossorigin="anonymous"></script>
</head>

<body>
    @yield('body')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
