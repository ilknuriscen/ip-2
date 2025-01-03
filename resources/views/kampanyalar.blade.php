@extends('layout')
@section('main')
   <style>
       .kampanyalar-container {
           border: 2px solid green;
           border-radius: 8px;
           padding: 20px;
           position: relative;
       }

       .kampanya-card {
           border: 1px solid green;
           border-radius: 5px;
           transition: all 0.3s ease;
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
       }

       .devam-btn:hover {
           background-color: #006400;
           transform: scale(1.1);
       }

   </style>
    <div class="container mt-5">
        <h1 class="mb-4">Tüm Kampanyalar</h1>
        <div class="kampanyalar-container p-3 border border-success rounded">
            <div class="row">
                @foreach($kampanyalar as $kampanya)
                    <div class="col-md-4 mb-4">
                        <div class="card kampanya-card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kampanya->kampanya_adi }}</h5>
                                <p class="card-text">
                                    <strong>İndirim Oranı:</strong> %{{ $kampanya->indirim_orani }}<br>
                                    <strong>Başlangıç Tarihi:</strong> {{ $kampanya->baslangic_tarihi }}<br>
                                    <strong>Bitiş Tarihi:</strong> {{ $kampanya->bitis_tarihi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
