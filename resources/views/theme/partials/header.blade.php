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
            <img src="assets/img/logo.png" alt="">

            <h1 class="sitename">مهارات هب</h1>
        </a>

        <a class="btn-getstarted order-3" href="{{ route('theme.trainers') }}">ابدأ</a>

    </div>
</header>
