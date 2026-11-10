<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sweet Bakery & Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fff5f7;
        color: burlywood;
        display:flex;
        flex-direction: column;
        min-height: 700px;
    }
    .main-contect{
        flex:1;
    }
    .btn-pink{
        background-color: pink;
        color: white;
        border: none;
        border-radius: 15px;
        padding: 8px 20px;
    }
    .btn-pink:hover{
        background-color: palevioletred;
        color: white;
    }
    .card-custom{
        background-color: white;
        border: 2px solid rgb(255, 211, 219);
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(255, 133, 161, 0.1);
    }
    .navbar-custom{
        background-color: white;
        border-bottom: 2px solid rgb(255, 211, 219);
    }
</style>
</head>
<body>
    <x-navbar :username="$username ?? 'Guest'" />
    <div class="container my-4 main-content">
        @yield('content')
    </div>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
