<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Sweet Bakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Poppins', sans-serif;
        background-color: #fff5f7;
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .card-login{
        background: white;
        border-radius: 20px;
        border: 2px solid rgb(255, 211, 219);
        box-shadow: 0px 8px 20px  rgba(255, 133, 161, 0.15);
        width:  100%;
        max-width: 400px;
        margin:  0 auto;
        padding: 30px;
    }
    .btn-pink{
        background-color: pink;
        color: white;
        border-radius: 25px;
        font-weight: 600;
        padding: 10px 0px;
    }
    .btn-pink:hover{
        background-color: palevioletred
        color: white;
    }
</style>
</head>
<body>
    <div class="card card-login">
        <div class="text-center mb-4">
            <h2 style="font-size: 40px">🍰</h2>
            <h4 class="fw-bold text-danger">Sweet Bakery</h4>
            <p class="text-muted small">Silakan Masuk☺️</p>
        </div>

        <form action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Nama / Username</label>
                <input type="text" class="form-control rounded-pill px-3" id="username" name="username" placeholder="Masukkan nama kamu..." required>
            </div>
            <button type="submit" class="btn btn-pink w-100 mt-2">Masuk ke Bakery ✨</button>
        </form>
    </div>

</body>
</html>
