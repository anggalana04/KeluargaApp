<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <h1 class="Title-Text">KeluargaKu!</h1>
        <a href="/">Daftar keluarga</a>
        <a href="/tambah">Tambah</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>