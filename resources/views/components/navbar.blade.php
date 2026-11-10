@props(['username' => 'Guest'])

<nav class="navbar navbar-expand-lg navbar-custom py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-danger" href="{{ route('dashboard', ['username' => $username]) }}">
            🍰 Sweet Bakery
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('profile', ['username' => $username]) }}">Profil Member</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-danger-subtle text-danger p-2 rounded-pill">✨ {{ $username }}</span>
                <a href="{{ route('login') }}" class="btn btn-outline-danger btn-sm rounded-pill">Logout</a>
            </div>
        </div>
    </div>
</nav>

