<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMSHIFT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 80px;
            margin-bottom: 100px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 30px 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: auto;
        }
        footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        footer .footer-links {
            margin-bottom: 20px;
        }
        footer .footer-links a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        footer .footer-links a:hover {
            text-decoration: underline;
        }
        footer .footer-bottom {
            font-size: 14px;
            margin-top: 20px;
        }
        footer .footer-bottom p {
            margin-bottom: 0;
        }

        .navbar-custom {
            background-color: #006400;
        }
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .navbar-nav {
            margin-left: 0;
            text-align: left;
        }
        .navbar-nav .nav-link {
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">FARMSHIFT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="{{('/')}}">Ana Sayfa</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{('hakkimizda')}}">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{('urunler')}}">Ürünler</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{('ciftciler')}}">Çiftçiler</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{('iletisim')}}">İletişim</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('main')
</main>

<footer>
    <div class="container">
        <h5>FARMSHIFT - Tarımın Geleceği</h5>
        <div class="footer-links">
            <a href="{{('/')}}">Ana Sayfa</a>
            <a href="{{('hakkimizda')}}">Hakkımızda</a>
            <a href="{{('urunler')}}">Ürünler</a>
            <a href="{{('ciftciler')}}">Çiftçiler</a>
            <a href="{{('iletisim')}}">İletişim</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 FARMSHIFT - Tüm Hakları Saklıdır.</p>
            <p><a href="#" class="text-white">Gizlilik Politikası</a> | <a href="#" class="text-white">Kullanım Koşulları</a></p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
