<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard — Latihan CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold text-danger" href="{{ route('dashboard') }}">Latihan_CRUD</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('crud.index') }}">Data</a></li>
      <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="{{ route('logout') }}">Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container py-5 text-center">
  <div class="card card-soft p-5">
    <h2 class="text-danger fw-bold mb-3"><i class="fa-solid fa-circle-user me-2"></i>Halo, {{ session('user') }}</h2>
    <p class="text-muted">Selamat datang di Dashboard Latihan CRUD dengan animasi interaktif merah elegan.</p>
    <a href="{{ route('crud.index') }}" class="btn btn-red mt-3"><i class="fa-solid fa-database me-2"></i>Kelola Data</a>
  </div>
</div>
<footer>© {{ date('Y') }} Latihan CRUD | Tema Merah Elegan Interaktif</footer>
<script src="{{ asset('js/transition.js') }}"></script>
</body>
</html>
