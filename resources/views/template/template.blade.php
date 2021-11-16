<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        table, th, td {
            border:1px solid black;
        }
    </style>
</head>

<body style="background-color: #1C4E6A">
    <nav class="navbar">
        <a href="/">
            <img style="width: 10%;" src="image/home.png" alt="">
        </a>
        <a class="navbar-brand" href="/">
            <h1 style="color: white;font-family: 'Bebas Neue', cursive;">rateUs.pangmoed</h1>
        </a>
        @yield('role')
        <a href="/logout">
            <img style="width: 10%;" src="image/logout.png" alt="">
        </a>
    </nav>

    @yield('isi')

    <footer>
        <p>RateUs Pangmoed © 2021. All rights reserved</p>
    </footer>
</body>
</html>
