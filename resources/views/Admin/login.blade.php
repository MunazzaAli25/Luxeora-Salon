<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Salon Management System</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('Admin/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-lg-7 col-10">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary">Salon Management</h2>
                            <p class="text-muted">Admin Dashboard Login</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.attempt') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center w-100" style="background: linear-gradient(135deg, #7367f0, #9e95f5); min-height: 100vh;">
                    <h1 class="text-white fw-bold text-center px-5">Luxeora Beauty Salon<br>Management System</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
