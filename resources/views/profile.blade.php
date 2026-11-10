@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-custom p-4 text-center">
            <div class="mb-3">
                <span class="fs-1 p-3 bg-danger-subtle rounded-circle d-inline-block">👩‍🍳</span>
            </div>
            <h4 class="fw-bold text-danger mb-1">{{ $username }}</h4>
            <p class="text-muted small mb-3">Master Baker & Member VIP</p>

            <ul class="list-group list-group-flush text-start border-top border-bottom my-3">
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-muted">Username</span>
                    <span class="fw-semibold">{{ $username }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-muted">Role Akses</span>
                    <span class="badge bg-danger-subtle text-danger">Administrator</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="text-muted">Status Akun</span>
                    <span class="badge bg-success-subtle text-success">Aktif</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
