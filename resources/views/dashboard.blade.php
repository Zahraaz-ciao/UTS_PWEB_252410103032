@extends('layouts.app')
@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card card-custom p-4 bg-white">
            <h2 class="fw-bold text-danger mb-2">Selamat Datang, {{ $username }}! 🍰✨</h2>
            <p class="text-muted mb-0">Selamat bekerja di <strong>Sweet Bakery & Cafe</strong>. Semoga harimu manis!</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom p-3 text center">
            <span class="gs-1">🥐</span>
            <h5 class="fw-bold mt-2">12 Varian</h5>
            <p class="text-muted small mb-0">Total Menu</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom p-3 text center">
             <span class="gs-1">⭐</span>
            <h5 class="fw-bold mt-2">4.9 / 5.0</h5>
            <p class="text-muted small mb-0">Rating Kepuasan Pelanggan</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom p-3 text center">
             <span class="gs-1">🧺</span>
            <h5 class="fw-bold mt-2">20 Pesanan</h5>
            <p class="text-muted small mb-0">Order Masuk Hari ini</p>
        </div>
    </div>
</div>
@endsection
