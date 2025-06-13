<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>مهارات هب</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    {{-- <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <link href="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/skill-logo-design-template-6677debd608907e81c75e20c66e95baf_screen.jpg?ts=1685817469" rel="icon">
    <link href="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/skill-logo-design-template-6677debd608907e81c75e20c66e95baf_screen.jpg?ts=1685817469" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap-grid.rtl.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap-grid.rtl.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap-utilities.rtl.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap-utilities.rtl.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.rtl.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap-reboot.rtl.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets') }}/css/main.css" rel="stylesheet">

    <style>
        /* Search Container */
        .search-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Tabs */
        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .tab-button {
            padding: 10px 20px;
            background: #f0f0f0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        .tab-button.active {
            background: #3498db;
            color: white;
        }

        /* Updated Search Styles */
        .search-wrapper {
            width: 100%;
        }

        .search-bar {
            display: flex;
            position: relative;
        }

        .search-input {
            flex: 1;
            position: relative;
        }

        .search-input input {
            width: 100%;
            padding: 15px 160px 15px 20px;
            /* Increased right padding */
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background: #fff;
            transition: all 0.3s ease;
            text-align: right;
            /* RTL text alignment */
            direction: rtl;
            /* RTL direction */
        }

        .search-input input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        .search-button {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s ease;
            min-width: 120px;
            /* Ensure consistent button width */
        }

        .search-button:hover {
            background: #2980b9;
        }

        .search-button i {
            font-size: 18px;
        }

        .quick-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            color: #666;
            font-size: 14px;
        }

        .quick-link {
            color: #3498db;
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .quick-link:hover {
            background: rgba(52, 152, 219, 0.1);
            text-decoration: underline;
        }

        /* RTL Adjustments */
        .search-button {
            left: auto;
            right: 10px;
            flex-direction: row-reverse;
        }

        .search-input input {
            padding: 15px 160px 15px 20px;
            /* Adjusted for RTL */
        }

        .quick-links {
            justify-content: flex-end;
            direction: rtl;
        }

        .quick-links span {
            margin-right: 0;
            margin-left: 8px;
        }

        .search-container
    </style>



    <style>
        /* Add this to your existing styles */
        .form-control,
        .form-select,
        .form-check-input {
            text-align: right;
            direction: rtl;
        }

        .invalid-feedback {
            text-align: right;
        }

        .form-check {
            padding-right: 1.5em;
            padding-left: 0;
        }

        .form-check-input {
            float: right;
            margin-right: -1.5em;
            margin-left: 0;
        }

        /* Adjust floating labels if you use them */
        .form-floating>label {
            right: 0;
            left: auto;
            transform-origin: right top;
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            transform: scale(0.85) translateY(-0.5rem) translateX(-1.15rem);
        }
    </style>

    <style>
        /* User dropdown styles */
        .dropdown-menu {
            text-align: right;
            direction: rtl;
        }

        .avatar-placeholder {
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Adjust dropdown positioning for RTL */
        .dropdown-menu-end {
            right: auto !important;
            left: 0 !important;
        }

        /* Make sure dropdown items have proper RTL alignment */
        .dropdown-item {
            text-align: right;
            padding-right: 1rem;
            padding-left: 1.5rem;
        }

        /* Adjust caret position for RTL */
        .dropdown-toggle::after {
            margin-right: 0.255em;
            margin-left: 0;
        }
    </style>

    {{-- This is for Why Skills Hub Section --}}
    <style>
        /* Why Skills Hub Section Styles */
        .why-skills-hub {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .feature-box {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            text-align: right;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .feature-list {
            list-style-type: none;
            padding-right: 0;
        }

        .feature-list li {
            position: relative;
            padding-right: 20px;
            margin-bottom: 8px;
        }

        .feature-list li:before {
            content: "•";
            color: #3498db;
            font-weight: bold;
            position: absolute;
            right: 0;
        }

        /* RTL Adjustments */
        .feature-box h3 {
            text-align: right;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .feature-box p {
            text-align: right;
            color: #7f8c8d;
        }
    </style>

    {{-- How It Works Section Styles --}}
    <style>
        .how-it-works {
            background-color: #fff;
            padding: 80px 0;
        }

        .step-box {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(252, 100, 100, 0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .step-box:hover {
            transform: translateY(-10px);
        }

        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        /* RTL Adjustments */
        .step-box h3 {
            text-align: center;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .step-box p {
            text-align: center;
            color: #7f8c8d;
        }

        .btn-lg {
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 50px;
        }
    </style>

    <style>
        /* Updated Growing Community Section Styles */
        .community {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        #row-community-id {
            display: flex;
            flex-direction: row-reverse;
        }

        #img-fluid {
            height: 50%
        }

        .community .icon-box {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            background-color: transparent;
            color: #3498db;
        }

        .community-features {
            border-left: 3px solid #3498db;
            padding-left: 20px;
        }

        .feature-item {
            text-align: right;
            align-items: flex-start;
        }

        .feature-item .icon-box {
            margin-right: 0;
            margin-left: 1rem;
            margin-top: 2px;
        }

        .feature-text {
            color: #495057;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* RTL Adjustments */
        .community-features {
            border-right: none;
        }

        @media (max-width: 991.98px) {
            .community .row>div {
                order: initial !important;
            }

            .community-features {
                margin-top: 30px;
            }
        }
    </style>

    <style>
        /* Trainer Search Styles */
        .trainer-search-container {
            background: #fff;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            width: 100%;
        }

        .trainer-search-group {
            position: relative;
            direction: rtl;
            width: 100%;
        }

        .trainer-search-input {
            padding: 0.75rem 3.5rem 0.75rem 1rem;
            border: 2px solid #e9ecef;
            border-radius: 20px !important;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            text-align: right;
            width: 100%;
            box-sizing: border-box;
        }

        .trainer-search-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }

        #trainer-search-btn {
            border-radius: 2rem
        }

        .trainer-search-btn {
            position: absolute;
            right: 6px;
            top: 50%;
            transform: translateY(10%);
            background: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            height: calc(100% - 12px);
        }

        .trainer-search-btn:hover {
            background: #2980b9;
        }

        .search-tags {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
            direction: rtl;
            width: 100%;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            flex-grow: 1;
        }

        .tag {
            background: #f8f9fa;
            color: #3498db;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            text-decoration: none;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .tag:hover {
            background: #e9f5ff;
            color: #1a6bac;
        }

        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .trainer-search-input {
                padding-right: 2.5rem;
                font-size: 0.9rem;
                padding-left: 0.75rem;
            }

            .trainer-search-btn {
                padding: 0.5rem;
                width: auto;
            }

            .trainer-search-btn span {
                display: none;
            }

            .search-tags span {
                display: none;
            }

            .tags-container {
                justify-content: center;
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            .tag {
                padding: 0.25rem 0.6rem;
                font-size: 0.75rem;
            }
        }
    </style>

    {{-- Search the coach in the trainers page
    <style>
        /* Trainer Search Styles */
        .trainer-search-container {
            background: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .trainer-search-group {
            position: relative;
            direction: rtl;
        }

        .trainer-search-input {
            padding: 1rem 1.5rem;
            border: 2px solid #e9ecef;
            border-radius: 8px !important;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-align: right;
        }

        .trainer-search-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }

        .trainer-search-btn {
            position: absolute;
            left: 8px;
            top: 50%;
            /* transform: translateY(-10%); */
            background: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .trainer-search-btn:hover {
            background: #2980b9;
        }

        .search-tags {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
            direction: rtl;
        }

        .tag {
            background: #f8f9fa;
            color: #3498db;
            padding: 0.35rem 0.9rem;
            border-radius: 20px;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .tag:hover {
            background: #e9f5ff;
            color: #1a6bac;
        }

        /* RTL Adjustments */
        .trainer-search-btn {
            left: auto;
            right: 8px;
            flex-direction: row-reverse;
        }

        .trainer-search-input {
            padding-left: 130px;
            padding-right: 1.5rem;
        }

        .search-tags span {
            margin-left: 0.5rem;
            margin-right: 0;
        }
    </style> --}}

    {{-- Growing Community Section Styles
    <style>
        .community {
            padding: 80px 0;
        }

        .community .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .community-features {
            border-right: 3px solid #3498db;
            padding-right: 20px;
        }

        /* RTL Adjustments */
        .community-features {
            border-right: none;
            border-left: 3px solid #3498db;
            padding-right: 0;
            padding-left: 20px;
        }

        .feature-item {
            text-align: right;
        }

        .feature-item .icon-box {
            margin-right: 0;
            margin-left: 1rem;
        }
    </style> --}}

    <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
