<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Keahlian — Latihan CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    :root { --red:#b00020; --red-dark:#8a0018; }
    body{font-family:"Segoe UI",sans-serif;background:#fff;}
    .navbar{background:#fff;box-shadow:0 2px 6px rgba(0,0,0,.1);}
    .btn-red{background:var(--red);color:#fff;border:none;}
    .btn-red:hover{background:var(--red-dark);color:#fff;}
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
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="{{ route('logout') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-danger"><i class="fa-solid fa-database me-2"></i>Data Keahlian</h3>
    <a href="{{ route('crud.create') }}" class="btn btn-red shadow-sm"><i class="fa-solid fa-plus me-2"></i>Tambah Data</a>
  </div>

  <div class="card card-soft p-3">
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-danger">
          <tr><th>ID</th><th>Nama</th><th>Keahlian</th><th>Foto</th><th style="width:170px;">Aksi</th></tr>
        </thead>
        <tbody>
          @forelse($data as $item)
            <tr>
              <td>{{ $item['id'] }}</td>
              <td class="text-start">{{ $item['nama'] }}</td>
              <td class="text-start">{{ $item['keahlian'] }}</td>
              <td>
                @if($item['foto'])
                  <img src="{{ asset('uploads/'.$item['foto']) }}" width="60" class="rounded border">
                @else
                  <span class="text-muted small fst-italic">Tidak ada</span>
                @endif
              </td>
              <td>
                <a href="{{ route('crud.edit',$item['id']) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                <a href="{{ route('crud.delete',$item['id']) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-outline-danger btn-sm">Hapus</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="py-4 text-muted">
                <i class="fa-solid fa-box-open fa-2x mb-2 d-block"></i>
                Belum ada data.<br>
                <a href="{{ route('crud.create') }}" class="btn btn-red btn-sm mt-2"><i class="fa-solid fa-plus me-1"></i> Tambah Sekarang</a>
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <div class="text-end mt-3 text-muted small">
    Total Data: <strong>{{ count($data) }}</strong>
  </div>
</div>

<footer>© {{ date('Y') }} Latihan CRUD | Tema Merah Elegan</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
