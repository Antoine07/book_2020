<html>

<head>
    <title>App Name - @yield('title', 'page par défaut')</title>
</head>

<body>
    @section('sidebar')
    This is the master sidebar.
    @show
    <div class="container">
        @include('partials.memu')
        @yield('content')
    </div>

    @section('footer')
    <ul>
        <li>Home</li>
        <li>Contact</li>
    </ul>
    @show
</body>

</html>