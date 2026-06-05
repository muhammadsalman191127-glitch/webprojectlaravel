<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="navbar">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/gallery" class="active">Gallery</a>
</div>

<div class="container">
    <div class="card">

        <h1>Galeri Kegiatan</h1>

        <ul>
            <li>Belajar Laravel</li>
            <li>Membuat Website</li>
            <li>Belajar JavaScript</li>
        </ul>

        <img src="{{ asset('images/image.png') }}">

    </div>
</div>

</body>
</html>