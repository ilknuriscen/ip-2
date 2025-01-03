@extends('layout')

@section('main')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white text-center">
                <h2 class="mb-0">İletişim</h2>
            </div>
            <div class="card-body d-flex flex-column flex-lg-row align-items-center">
                <div class="mb-4 mb-lg-0 text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="İletişim Görseli" class="rounded shadow" style="width: 300px; height: 300px; object-fit: cover;">
                </div>
                <div class="flex-grow-1 ms-lg-5">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('iletisim.gonder') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="konu" class="form-label fw-bold">Konu</label>
                            <input type="text" class="form-control" id="konu" name="konu" placeholder="Konu başlığını yazınız..." required>
                        </div>
                        <div class="mb-3">
                            <label for="mesaj" class="form-label fw-bold">Mesaj</label>
                            <textarea class="form-control" id="mesaj" name="mesaj" rows="5" placeholder="Mesajınızı buraya yazınız..." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gonderim_tarihi" class="form-label fw-bold">Gönderim Tarihi</label>
                            <input type="date" class="form-control" id="gonderim_tarihi" name="gonderim_tarihi" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
