<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/image/logo.jpg" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="/css/style-index-home.css">

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
    <!-- NavBar -->
    <section style="height: 100%; width: 10%; box-sizing: border-box;">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light p-3 px-md-4 mb-3 bg-body border-bottom">
            <div class="container">
                <a class="navbar-brand fw-bold fs-4" href="/">
                    <img src="/image/logo4.jpg" alt="RateUs.Pangmoed" />
                </a>
                <ul class="navbar-nav ">
                    <li class="nav-item mx-3">
                        <a href="/">
                            <img width="30px;"  src="image/home.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        @yield('role')
                    </li>
                    <li class="nav-item mx-3">
                        <a href="/logout">
                            <img width="30px;" src="image/logout.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Akhir Navbar -->

    @yield('isi')

    {{-- <footer>
        <p>RateUs Pangmoed © 2021. All rights reserved</p>
    </footer> --}}
</body>
</html>
