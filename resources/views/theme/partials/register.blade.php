<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>تسجيل جديد | مهارات هب</title>

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

        .register-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .register-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .register-header {
            background: #5fcf80;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .register-body {
            padding: 30px;
            background: white;
        }

        .form-control {
            height: 45px;
            border-radius: 8px;
        }

        .btn-register {
            background: #5fcf80;
            border: none;
            padding: 12px;
            font-weight: 600;
        }

        .btn-register:hover {
            background: #4cb869;
        }

        .password-strength {
            height: 5px;
            background: #e9ecef;
            margin-top: 5px;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 0%;
            transition: width 0.3s;
        }

        .password-hints {
            font-size: 0.8rem;
            color: #6c757d;
        }

        .password-hints .valid {
            color: #28a745;
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
                <h2>إنشاء حساب جديد</h2>
            </div>
        </section>

        <section class="inner-page">
            <div class="container">
                <div class="register-container">
                    <div class="register-card">
                        <div class="register-header">
                            <h3>انضم إلى مجتمعنا</h3>
                            <p>ابدأ رحلة تبادل المهارات اليوم</p>
                        </div>

                        <div class="register-body">
                            <form id="registerForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">الاسم الأول</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">الاسم الأخير</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control" id="password" required>
                                    <div class="password-strength mt-2">
                                        <div class="progress-bar bg-danger" id="passwordStrength"></div>
                                    </div>
                                    <div class="password-hints mt-2">
                                        <p id="lengthHint" class="mb-1"><i class="far fa-circle"></i> 8 أحرف على الأقل
                                        </p>
                                        <p id="uppercaseHint" class="mb-1"><i class="far fa-circle"></i> حرف كبير واحد
                                            على الأقل</p>
                                        <p id="numberHint"><i class="far fa-circle"></i> رقم واحد على الأقل</p>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">تأكيد كلمة المرور</label>
                                    <input type="password" class="form-control" id="confirmPassword" required>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label class="form-check-label" for="terms">أوافق على <a href="terms.html">شروط
                                            الخدمة</a> و <a href="privacy.html">سياسة الخصوصية</a></label>
                                </div>

                                <button type="submit" class="btn btn-register btn-primary w-100 text-white">إنشاء
                                    حساب</button>

                                <div class="text-center mt-3">
                                    <p>لديك حساب بالفعل؟ <a href="login.html">سجل الدخول هنا</a></p>
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

    <!-- Password Strength Checker -->
    <script>
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('passwordStrength');
            const hints = {
                length: document.getElementById('lengthHint'),
                uppercase: document.getElementById('uppercaseHint'),
                number: document.getElementById('numberHint')
            };

            let strength = 0;

            // Check length
            if (password.length >= 8) {
                strength += 33;
                hints.length.innerHTML = '<i class="fas fa-check-circle valid"></i> 8 أحرف على الأقل';
            } else {
                hints.length.innerHTML = '<i class="far fa-circle"></i> 8 أحرف على الأقل';
            }

            // Check uppercase
            if (/[A-Z]/.test(password)) {
                strength += 33;
                hints.uppercase.innerHTML = '<i class="fas fa-check-circle valid"></i> حرف كبير واحد على الأقل';
            } else {
                hints.uppercase.innerHTML = '<i class="far fa-circle"></i> حرف كبير واحد على الأقل';
            }

            // Check number
            if (/\d/.test(password)) {
                strength += 34;
                hints.number.innerHTML = '<i class="fas fa-check-circle valid"></i> رقم واحد على الأقل';
            } else {
                hints.number.innerHTML = '<i class="far fa-circle"></i> رقم واحد على الأقل';
            }

            // Update strength bar
            strengthBar.style.width = strength + '%';

            if (strength < 50) {
                strengthBar.className = 'progress-bar bg-danger';
            } else if (strength < 80) {
                strengthBar.className = 'progress-bar bg-warning';
            } else {
                strengthBar.className = 'progress-bar bg-success';
            }
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('كلمة المرور وتأكيدها غير متطابقين');
            }
        });
    </script>
</body>

</html>
