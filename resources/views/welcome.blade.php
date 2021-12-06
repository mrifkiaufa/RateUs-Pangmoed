<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-index-home.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon" />
    <title>RateUs.Pangmoed</title>
  </head>
  <body style="font-family: Poppins, sans-serif">

    <!-- NavBar -->
    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light p-3 px-md-4 mb-3 bg-body border-bottom">
        <div class="container">
          <a class="navbar-brand fw-bold fs-4" href="#">
            <img src="/image/logo4.jpg" alt="RateUs.Pangmoed" />
          </a>
        </div>
      </nav>
    </section>
    <!-- Akhir Navbar -->

    <!-- Hero -->
    <div class="Hero">
      <div class="container" style="padding-top: 12rem">
        <div class="row justify-content-evenly align-items-center">
          <div class="col-md-6 col-lg-5">
            <div class="gambar_hero">
              <img src="/image/logo.jpg" class="img-fluid" alt="gambar hero" />
            </div>
          </div>
          <div class="col-md-6 col-lg-5 text-center text-md-start mt-4">
            <h1 class="display-4 fw-bold">Selamat Datang di Situs RateUs.Pangmoed</h1>
            <br />
            <p class="lead">Ingin log-in sebagai?</p>
            <form action="/login" method="POST">
              @csrf
              <button type="submit" name="role" value="pelanggan" class="btn btn-light shadow border-5 py-2 fw-bold">Pelanggan</button>
              <button type="submit" name="role" value="admin" class="btn btn-secondary shadow border-5 py-2 fw-bold">Admin</button>
            </form>
          </div>
        </div>
    </div>
    <!-- Akhir Hero -->

    <!-- Footer -->
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 230"><path fill="#e6c395" fill-opacity="1" d="M0,96L34.3,96C68.6,96,137,96,206,96C274.3,96,343,96,411,122.7C480,149,549,203,617,229.3C685.7,256,754,256,823,240C891.4,224,960,192,1029,160C1097.1,128,1166,96,1234,96C1302.9,96,1371,128,1406,144L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        <p class="text-black text-center pb-4 m-0" style="background-color: #e6c395;">Made with ❤️ by Kelompok M</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>