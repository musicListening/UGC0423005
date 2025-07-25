<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - AquaLogix</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background: url('{{ asset('img/fact-bg.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }
    .form-wrapper {
      position: relative;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
      background-color: rgba(255, 255, 255, 0.95);
      width: 100%;
      max-width: 400px;
    }
    .card-title {
      font-weight: bold;
      color: #007bff;
      text-align: center;
    }
    .form-icon {
      color: #007bff;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
  </style>
</head>
<body>
  <!-- Dark overlay -->
  <div class="overlay"></div>

  <!-- Centered form -->
  <div class="form-wrapper container">
    <div class="card p-4">
      <h2 class="card-title mb-4">Create Account</h2>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill form-icon"></i></span>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope-fill form-icon"></i></span>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill form-icon"></i></span>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill form-icon"></i></span>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
        <p class="mt-3 text-center">
          Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
