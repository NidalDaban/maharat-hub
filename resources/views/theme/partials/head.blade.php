<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Mentor Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

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
        .container2 {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-right: auto;
            margin-left: auto;
        }

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

        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-input {
            flex: 1;
            position: relative;
        }

        .search-input input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
        }

        .search-button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            background-color: #3498db;
            padding: 10px;
            border-radius: 12px
        }

        /* Filters */
        .filters select {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: white;
            font-size: 16px;
        }

        #about-content {
            flex-direction: column; 
            justify-content: center; 
            display: flex;
        }

        .read-more {
            
        }
    </style>

    <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
