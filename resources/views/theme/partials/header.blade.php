{{-- <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <nav id="navmenu" class="navmenu order-2">
            <ul>
                <li><a href="{{ route('theme.index') }}" class="@yield('index-active')">الصفحة الرئيسية<br></a></li>
                <li><a href="{{ route('theme.about') }}" class="@yield('about-active')">معلومات عنا</a></li>
                <li><a href="{{ route('theme.trainers') }}" class="@yield('trainers-active')">المدربين</a></li>
                <li><a href="{{ route('theme.contact') }}" class="@yield('contact-active')">تواصل معنا</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a href="{{ route('theme.index') }}" class="logo d-flex align-items-center ms-auto order-1">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/logo.png" alt="">

            <h1 class="sitename">مهارات هب</h1>
        </a>

        <a class="btn-getstarted order-3" href="{{ route('register') }}">تسجيل الدخول/انشاء حساب</a>

    </div>
</header> --}}




<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <nav id="navmenu" class="navmenu order-2">
            <ul>
                <li><a href="{{ route('theme.index') }}" class="@yield('index-active')">الصفحة الرئيسية<br></a></li>
                <li><a href="{{ route('theme.about') }}" class="@yield('about-active')">معلومات عنا</a></li>
                <li><a href="{{ route('theme.trainers') }}" class="@yield('trainers-active')">المدربين</a></li>
                <li><a href="{{ route('theme.contact') }}" class="@yield('contact-active')">تواصل معنا</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a href="{{ route('theme.index') }}" class="logo d-flex align-items-center ms-auto order-1">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assets/img/logo.png" alt=""> --}}
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/skill-logo-design-template-6677debd608907e81c75e20c66e95baf_screen.jpg?ts=1685817469" alt="">
            <h1 class="sitename">مهارات هب</h1>
        </a>

        @auth
            <!-- User dropdown for authenticated users -->
            <div class="dropdown order-3">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @if (auth()->user()->avatar)
                        <img src="{{ auth()->user()->avatar }}" alt="صورة المستخدم" width="32" height="32"
                            class="rounded-circle me-2">
                    @else
                        <div class="avatar-placeholder rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                            style="width: 32px; height: 32px;">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                    @endif
                    <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser" style="">
                    <li><a class="dropdown-item" href="{{ route('profile') }}">حسابي</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">تسجيل الخروج</button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <!-- Login/Register button for guests -->
            <a class="btn-getstarted order-3" href="{{ route('login') }}">تسجيل الدخول/انشاء حساب</a>
        @endauth

    </div>
</header>
