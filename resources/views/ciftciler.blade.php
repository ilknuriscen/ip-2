@extends('layout')
@section('main')
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card img {
            border-radius: 50%;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .card img:hover {
            transform: rotate(5deg) scale(1.1);
        }

        .input-group {
            max-width: 600px;
            margin: 20px auto;
        }

        .input-group input {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 10px;
            font-size: 14px;
        }

        .input-group button {
            background-color: #155724;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 15px;
        }

        .input-group button:hover {
            background-color: #0c4e14;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 5px;
            background-color: #fff;
            color: #155724;
            border: 1px solid #ddd;
            text-decoration: none;
        }

        .pagination .page-item.active .page-link {
            background-color: #155724;
            border-color: #155724;
            color: white;
        }


        .pagination .page-item a.page-link {
            background-color: #155724;
            color: #fff;
        }

        .pagination .page-item a.page-link:hover {
            background-color: #28a745;
            color: white;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #f8f9fa;
            color: #d6d8d9;
        }
    </style>
<br>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Çiftçiler</h1>


        <form action="{{ route('ciftciler.ara') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="ara" class="form-control" placeholder="Çiftçi, bölge veya ürün türü ara..." value="{{ request('ara') }}">
                <button class="btn btn-primary" type="submit">Ara</button>
            </div>
        </form>

        <div class="row">
            @foreach ($ciftciler as $ciftci)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <img src="{{ asset('images/ciftciaa.jpg') }}" class="rounded-circle" width="100" height="100">
                            </div>

                            <h5 class="card-title text-uppercase">{{ $ciftci->ciftlik_adi }}</h5>

                            <p class="mb-0"><i class="fas fa-user"></i> <strong>Kullanıcı:</strong> {{ $ciftci->kullanici ? $ciftci->kullanici->ad_soyad : 'Ad Soyad Yok' }}</p>
                            <p class="mb-1"><i class="fas fa-map-marker-alt"></i> <strong>Bölge:</strong> {{ $ciftci->bolge ? $ciftci->bolge->bolge_adi : 'Bölge adı yok' }}</p>
                            <p class="mb-1"><i class="fas fa-leaf"></i> <strong>Ürün Türü:</strong> {{ $ciftci->urun_turu }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    @if ($ciftciler->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Önceki</span></li>
                    @else
                        <li class="page-item"><a href="{{ $ciftciler->previousPageUrl() }}" class="page-link">Önceki</a></li>
                    @endif

                    @foreach ($ciftciler->getUrlRange(1, $ciftciler->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $ciftciler->currentPage() ? 'active' : '' }}">
                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($ciftciler->hasMorePages())
                        <li class="page-item"><a href="{{ $ciftciler->nextPageUrl() }}" class="page-link">Sonraki</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Sonraki</span></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endsection
