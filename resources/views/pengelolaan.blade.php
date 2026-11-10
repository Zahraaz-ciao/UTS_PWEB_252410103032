@extends('layouts.app')
@section('content')

<div class='card card-custom p-4'>
    <div class="d-flex justify-content-between align-items-centes mb-4">
        <div>
            <h4 class="fw-bold text danger mb-1">Daftar Menu Kue</h4>
            <p class="text-muted small mb-0">Pengelolaan stok dan katalog Sweet Bakery</p>
        </div>
        <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill">Total: {{count($kue)}} Item</span>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align middle">
            <thead class="table-danger">
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status Stok</th>
                </tr>
                <tbody>
                    @foreach($kue as $index => $item)
                    <tr>
                        <td>{{$index + 1}}</td>
                       <td class="fw-semibold">{{ $item['nama'] }}</td>
                       <td><span class="badge bg-secondary-subtle text-dark">{{ $item['kategori'] }}</span></td>
                       <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                       <td>
                        @if($item['stok'] == 'Tersedia')
                        <span class="badge bg-success-subtle text-success">Tersedia</span>
                        @else <span class="badge bg-danger-subtle text-danger">Habis</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

