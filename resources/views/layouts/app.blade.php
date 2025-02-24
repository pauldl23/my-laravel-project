<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Portfolio')</title>
</head>
<body>
    @include('layouts.menu')
    <main>
        @yield('content')
    </main>
</body>
</html>
