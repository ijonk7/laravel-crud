<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('template-login/assets/css/login.css') }}">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{ asset('template-login/assets/images/login-2.jpg') }}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="{{ asset('template-login/assets/images/CRUD-Laravel.png') }}" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="***********">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-block login-btn mb-4">
                      {{ __('Login') }}
                  </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
