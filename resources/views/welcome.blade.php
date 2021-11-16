<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rate.Us Pangmoed</title>
</head>
<body>
    <h1>Selamat Datang di Situs RateUs.Pangmoed!</h1>
    <form action="/login" method="POST">
        @csrf

        <p>
            <label>Ingin login sebagai?:</label>
            <select name="role">
                <option value="pelanggan">Pelanggan</option>
                <option value="admin">Admin</option>
            </select>
        </p>

        <button type="submit" name="submit">Next</button>
    </form>
</body>
</html>
