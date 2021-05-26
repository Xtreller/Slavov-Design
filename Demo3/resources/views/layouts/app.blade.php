<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/carList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cars</title>
</head>
<header class="m-auto">
    <ul class="navbar bg-dark mt-0 p-3 pl-5 pr-5 ">
        <li><a href="/">Home</a></li>
        <li><a href="/More">More</a></li>
        <li><a href="/cars">Cars</a></li>
        <li><a href="/addCategory">Add Category</a></li>
        @guest
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @endguest
        @auth
            <form  action="{{ url('logout') }}" method="POST">
                @csrf
                {{ csrf_field() }} <li><button class="btn btn-primary">Logout</button></li>
            </form>
        @endauth
    </ul>
</header>

<body class="bg-gradient-to-r from-red-100 to-red-300">
    @yield('content')
    <script src="{{ asset('js/addform.js') }}"></script>
</body>

</html>
