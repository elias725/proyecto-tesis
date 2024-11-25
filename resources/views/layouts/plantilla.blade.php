<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    <header>
        <h1>menu de navegacion</h1>
        <nav>
            <ul>
                <li><a href = " {{ route ('clientes') }} ">Clientes</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>