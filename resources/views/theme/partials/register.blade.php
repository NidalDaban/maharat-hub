@extends('theme.master')

@section('content')
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4 p-sm-5">
                            <h2 class="card-title text-center mb-4">إنشاء حساب جديد</h2>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="firstname" class="form-label">الاسم الاول</label>
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                        id="firstname" name="firstname" value="{{ old('firstname') }}" required
                                        autocomplete="firstname" autofocus>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="lastname" class="form-label">الاسم الاخير</label>
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                        id="lastname" name="lastname" value="{{ old('lastname') }}" required
                                        autocomplete="lastname" autofocus>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">تأكيد كلمة المرور</label>
                                    <input type="password" class="form-control" id="password-confirm"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">تسجيل</button>
                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <p class="mb-0">لديك حساب بالفعل؟ <a href="{{ route('login') }}">تسجيل الدخول</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <main id="main">
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
                        <form id="registerForm" action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label" placeholder="ادخل الاسم الاول">الاسم
                                        الأول</label>
                                    <input type="text" name="firstName" class="form-control" id="firstName"
                                        value="{{ old('firstName') }}" required>
                                    <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label" placeholder="ادخل الاسم الاخير">الاسم
                                        الأخير</label>
                                    <input type="text" name="lastName" class="form-control" id="lastName"
                                        value="{{ old('lastName') }}" required>
                                    <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label" placeholder="ادخل البريد الالكتروني">البريد
                                    الإلكتروني</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label" placeholder="ادخل كلمة المرور">كلمة
                                    المرور</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
                                <label for="confirmPassword" class="form-label" placeholder="ادخل كلمة المرور">تأكيد
                                    كلمة المرور</label>
                                <input type="password" class="form-control" id="confirmPassword" required>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">أوافق على <a href="terms.html">شروط
                                        الخدمة</a> و <a href="privacy.html">سياسة الخصوصية</a></label>
                            </div>

                            <button type="submit" class="btn btn-register btn-primary w-100 text-white">إنشاء
                                حساب</button>

                            <div class="text-center mt-3">
                                <p>لديك حساب بالفعل؟ <a href="{{ route('login') }}">سجل الدخول هنا</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> --}}

{{-- <script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

<!-- Template Main JS File -->
{{-- <script src="assets/js/main.js"></script> --}}



<!-- Password Strength Checker -->
{{-- <script>
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
</script> --}}
