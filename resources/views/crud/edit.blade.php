<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data — Latihan CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    :root { --red:#b00020; --red-dark:#8a0018; }
    body{font-family:"Segoe UI",sans-serif;background:#fff;}
    .navbar{background:#fff;box-shadow:0 2px 6px rgba(0,0,0,.1);}
    .btn-red{background:var(--red);color:#fff;border:none;}
    .btn-red:hover{background:var(--red-dark);}
    .card-soft{border:none;border-radius:12px;box-shadow:0 5px 20px rgba(176,0,32,0.1);}
    footer{text-align:center;color:#777;font-size:13px;padding:20px 0;margin-top:50px;border-top:1px solid #eee;}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold text-danger" href="{{ route('dashboard') }}">Latihan_CRUD</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('crud.index') }}">Kembali</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="card card-soft p-4">
    <h4 class="text-danger mb-4"><i class="fa-solid fa-pen-to-square me-2"></i>Edit Data</h4>

    <form action="{{ route('crud.update', $item['id']) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $item['nama'] }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Keahlian</label>
        <input type="text" name="keahlian" class="form-control" value="{{ $item['keahlian'] }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Foto Baru (opsional)</label>
        <input type="file" name="foto" class="form-control">
        @if($item['foto'])
          <div class="mt-2">
            <img src="{{ asset('uploads/'.$item['foto']) }}" width="100" class="rounded border">
          </div>
        @endif
      </div>
      <button class="btn btn-red px-4"><i class="fa-solid fa-pen me-2"></i>Update</button>
      <a href="{{ route('crud.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<footer>© {{ date('Y') }} Latihan CRUD | Tema Merah Elegan</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
