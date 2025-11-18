<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome — Latihan CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold text-danger" href="#">Latihan_CRUD</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="{{ route('login') }}">Login</a></li>
    </ul>
  </div>
</nav>

<section class="text-center py-5">
  <i class="fa-solid fa-rocket fa-3x text-danger mb-3"></i>
  <h1 class="fw-bold text-danger">Selamat Datang di Latihan CRUD</h1>
  <p class="text-muted">Aplikasi Laravel sederhana dengan animasi interaktif dan transisi antar-halaman halus.</p>
  <a href="{{ route('login') }}" class="btn btn-red btn-lg mt-2">
    <i class="fa-solid fa-right-to-bracket me-2"></i>Masuk Sekarang
  </a>
</section>

<div class="container pb-5">
  <div class="row text-center">
    <div class="col-md-4 mb-3"><div class="card card-soft p-4">
      <i class="fa-solid fa-layer-group fa-2x text-danger mb-3"></i><h5>CRUD Tanpa Database</h5>
      <p class="text-muted small">Data disimpan sementara di Session, cocok untuk latihan Laravel.</p></div></div>
    <div class="col-md-4 mb-3"><div class="card card-soft p-4">
      <i class="fa-solid fa-paintbrush fa-2x text-danger mb-3"></i><h5>Tampilan Modern</h5>
      <p class="text-muted small">Desain elegan, efek interaktif, dan animasi fade-in di setiap elemen.</p></div></div>
    <div class="col-md-4 mb-3"><div class="card card-soft p-4">
      <i class="fa-solid fa-user-shield fa-2x text-danger mb-3"></i><h5>Login Aman</h5>
      <p class="text-muted small">Akses halaman CRUD hanya untuk admin terverifikasi.</p></div></div>
  </div>
</div>

<footer>© {{ date('Y') }} Latihan CRUD | Merah Elegan Interaktif</footer>
<script src="{{ asset('js/transition.js') }}"></script>
</body>
</html>
