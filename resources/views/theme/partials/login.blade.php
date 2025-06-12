{{-- <!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>تسجيل الدخول | مهارات هب</title>

    <!-- Bootstrap RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Tajawal Arabic Font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Mentor Theme CSS -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .login-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-header {
            background: #5fcf80;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .login-body {
            padding: 30px;
            background: white;
        }

        .form-control {
            height: 45px;
            border-radius: 8px;
        }

        .btn-login {
            background: #5fcf80;
            border: none;
            padding: 12px;
            font-weight: 600;
        }

        .btn-login:hover {
            background: #4cb869;
        }

        .social-login .btn {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-weight: 500;
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .divider:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e9ecef;
            z-index: -1;
        }

        .divider span {
            background: white;
            padding: 0 15px;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="about.html">عن المنصة</a></li>
                    <li><a href="courses.html">المهارات</a></li>
                    <li><a href="contact.html">اتصل بنا</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!-- Keep original footer from Mentor theme -->
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html> --}}


@extends('theme.master')

@section('content')
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4 p-sm-5">
                            <h2 class="card-title text-center mb-4">تسجيل الدخول</h2>

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">تذكرني</label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                                </div>

                                <div class="text-center mt-3">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">نسيت كلمة المرور؟</a>
                                    @endif
                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <p class="mb-0">ليس لديك حساب؟ <a href="{{ route('register') }}">إنشاء حساب جديد</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
