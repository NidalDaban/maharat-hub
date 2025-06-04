<!DOCTYPE html>
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
            <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""
                    class="img-fluid"></a>
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
    </header><!-- End Header -->

    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <h2>تسجيل الدخول</h2>
            </div>
        </section>

        <section class="inner-page">
            <div class="container">
                <div class="login-container">
                    <div class="login-card">
                        <div class="login-header">
                            <h3>مرحبًا بعودتك!</h3>
                            <p>سجل الدخول للوصول إلى حسابك</p>
                        </div>

                        <div class="login-body">
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control" id="password" required>
                                    <div class="text-end mt-2">
                                        <a href="forgot-password.html" class="text-muted small">نسيت كلمة المرور؟</a>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">تذكرني</label>
                                </div>

                                <button type="submit" class="btn btn-login btn-primary w-100 text-white">تسجيل
                                    الدخول</button>

                                <div class="divider">
                                    <span>أو سجل الدخول باستخدام</span>
                                </div>

                                <div class="social-login">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="fab fa-google me-2"></i> جوجل
                                    </a>
                                    <a href="#" class="btn btn-outline-primary mt-2">
                                        <i class="fab fa-facebook-f me-2"></i> فيسبوك
                                    </a>
                                </div>

                                <div class="text-center mt-3">
                                    <p>ليس لديك حساب؟ <a href="register.html">أنشئ حساب جديد</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

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

</html>
