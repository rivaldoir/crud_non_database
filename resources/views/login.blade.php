<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login — Latihan CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card card-soft p-4 text-center mt-5">
        <div class="mb-3">
          <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width:70px;height:70px;">
            <i class="fa-solid fa-lock fa-lg"></i>
          </div>
        </div>
        <h4 class="text-danger mb-3">Login Admin</h4>

        @if(session('error'))
          <div class="alert alert-danger py-2">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
          @csrf
          <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
          <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
          <button class="btn btn-red w-100"><i class="fa-solid fa-right-to-bracket me-2"></i>Masuk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<footer>© {{ date('Y') }} Latihan CRUD</footer>
</body>
<script src="{{ asset('js/transition.js') }}"></script>

</html>
