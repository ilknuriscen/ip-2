@extends('layout')
@section('main')
    <style>
        .card:hover {
            transform: translateY(-5px);
        }

        .btn-success:hover {
            background-color: #28a745;
        }

        .border-success {
            border: 2px solid #006400 !important;
        }

        .border-success:hover {
            border-color: #7bed8e;
        }

        .btn-success {
            border: 2px solid #006400;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #7bed8e;
        }

        .kampanyalar-container {
            border: 2px solid green;
            border-radius: 8px;
            padding: 20px;
            position: relative;
            background-color: #f9f9f9;
        }

        .kampanya-card {
            border: 1px solid green;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .kampanya-card:hover {
            background-color: #f0fff0;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 128, 0, 0.2);
        }

        .devam-btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: green;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .devam-btn:hover {
            background-color: #006400;
            transform: scale(1.1);
        }

    </style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 d-flex flex-column align-items-start" style="padding-right: 15px; border: 2px solid #006400; border-radius: 10px; padding: 60px;">
                <h2 style="font-weight: bold;">Tarımda Dijital Dönüşüm</h2>
                <p>
                    Tarım sektörü, dijitalleşmenin gücünden faydalanarak büyük bir dönüşüm yaşıyor. Bugün, çiftçiler ve üreticiler, online platformlar sayesinde ürünlerini daha geniş bir müşteri kitlesine ulaştırabiliyor. E-ticaretin yükselişi, tarım ürünlerinin pazarlanmasında yenilikçi fırsatlar sunarken, tüketicilere de daha taze ve doğrudan ürünler sunma imkanı sağlıyor. Bu dijital platformlar sayesinde üreticiler, stoklarını ve fiyatlarını kolayca yönetebilirken, tüketiciler de güvenilir ve kaliteli ürünleri rahatlıkla temin edebiliyor. Tarımda online satış, yalnızca verimliliği artırmakla kalmıyor, aynı zamanda çiftçilerin iş süreçlerini daha verimli hale getiriyor ve sektördeki rekabeti güçlendiriyor.
                </p>
                <div class="ms-3" style="max-width: 300px; height: auto;">
                    <img src="/images/logo.png" class="img-fluid" >
                </div>
            </div>

            <div class="col-md-6">
                <div id="carouselExampleAutoplaying" class="carousel slide border border-5 border-dark-green " style="max-width: 100%; background-color: #e9f5e0;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/ciftlik.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="/images/ciftlik2.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="/images/tarla.jpg" class="d-block w-100" >
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Önceki</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sonraki</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="border border-2 border-success p-4" style="position: relative; border-radius: 10px;">
                <h2>Kampanyalar</h2>
                <div class="kampanyalar-container">
                    <div class="row">
                        @foreach($kampanyalar as $kampanya)
                            <div class="col-md-4">
                                <div class="card kampanya-card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $kampanya->kampanya_adi }}</h5>
                                        <p class="card-text">İndirim: %{{ $kampanya->indirim_orani }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('kampanyalar.all') }}" class="btn btn-success mt-3" style="position: absolute; bottom: 20px; right: 20px;">Devamını Gör</a>
                    <br>
                    <br>
                </div>
            </div>
            <br><br>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
