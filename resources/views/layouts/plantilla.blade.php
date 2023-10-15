<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        ESTE ES EL HEADER
    </header>

    @yield('content')

    @yield('anotherContent')

    <footer>
        ESTE ES EL FOOTER
    </footer>
</body>

</html>
