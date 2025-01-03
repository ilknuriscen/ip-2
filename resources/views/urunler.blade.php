@extends('layout')
@section('main')
    <title>Ürünler</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .product-frame {
            border: 1px solid #ddd;
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-frame:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-info {
            background-color: #006400;
            border-color: #004d00;
        }

        .btn-info:hover {
            background-color: #004d00;
            border-color: #003700;
        }
    </style>
    </head>
    <body>
    <div class="container mt-5">
        <h2 class="text-center">Ürünler</h2>
        <div class="row">
            @foreach ($urunler as $urun)
                <div class="col-md-4 mb-4">
                    <div class="product-frame">
                        <h3>{{ $urun->urun_adi }}</h3>
                        <p><strong>Fiyat: </strong>{{ $urun->birim_fiyat }} ₺</p>
                        <p><strong>Stok Miktarı: </strong>{{ $urun->stok_miktari }}</p>
                        <p><strong>Birim: </strong>{{ $urun->birim }}</p>
                        <button class="btn btn-info" data-toggle="modal" data-target="#kategoriModal" data-kategori="{{ $urun->kategori->kategori_adi }}" data-aciklama="{{ $urun->kategori->aciklama }}">Detayı Gör</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="kategoriModal" tabindex="-1" role="dialog" aria-labelledby="kategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kategoriModalLabel">Kategori Detayı</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Kategori Adı: </strong><span id="kategoriAdi"></span></p>
                    <p><strong>Açıklama: </strong><span id="kategoriAciklama"></span></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#kategoriModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var kategoriAdi = button.data('kategori');
            var kategoriAciklama = button.data('aciklama');

            var modal = $(this);
            modal.find('#kategoriAdi').text(kategoriAdi);
            modal.find('#kategoriAciklama').text(kategoriAciklama);
        });
    </script>
    </body>
    </html>
@endsection
