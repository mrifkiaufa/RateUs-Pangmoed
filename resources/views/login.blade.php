<!DOCTYPE html>
<html>
<head>
    <title>Log-in ● RateUs.Pangmoed</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/image/logo.jpg" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="/css/style-index-home.css">
</head>
<body>
    <!-- NavBar -->
    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light p-3 px-md-4 mb-3 bg-body border-bottom">
            <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="/">
                <img src="/image/logo4.jpg" alt="RateUs.Pangmoed" />
            </a>
            </div>
        </nav>
    </section>
    <!-- Akhir Navbar -->

    <!-- Isi Formulir -->
    <div class="container" style="padding-top: 7rem;">
        
        @if ($role == 'admin')
            <h1 class="text-center mt-5 pb-4 text-white">HALAMAN ADMIN</h1>       
        @elseif ($role == 'pelanggan')
            <h1 class="text-center mt-5 pb-4 text-white">HALAMAN PELANGGAN</h1>
        @endif
        <!-- Awal formulir -->
        <div class="mt-3">
            <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 600px; background-color :#e6c395; border-radius: 15px 15px 0px 0px;">
            @if ($role == 'admin')
                <b>INPUT PASSWORD</b>           
            @elseif ($role == 'pelanggan')
                <b>INPUT TOKEN</b>
            @endif   
            </div>
            <div class="card-body text-black mx-auto shadow-lg" style="width: 600px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
                <div class="form-group text-center">
                    <form action="/logged" method="POST">
                        @csrf
                        @if ($role == 'admin')
                            <p>
                                <label>Password:</label>
                                <br>
                                <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="password" name="password" placeholder="Password..." />
                            </p>
                        @elseif ($role == 'pelanggan')
                            <p>
                                <label>Token:</label>
                                <br>
                                <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="token" placeholder="Token..." />
                                <br>
                                <label>*Silahkan minta token ke Staf Pangmoed Cafe</label>
                            </p>
                        @endif
                        <a class="btn btn-light mt-3 shadow-sm" href="/">Back</a>
                        <button class="btn btn-success mt-3 shadow-sm" type="submit" name="submit" value={{ $role }}>LOG-IN</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <!--Akhir formulir-->
</body>
</html>
