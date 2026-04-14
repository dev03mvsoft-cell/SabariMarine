<?php if(!defined('SECURE_ACCESS')) exit('Forbidden'); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabari Marine Enterprises | Premium Marine Services</title>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base_url; ?>/assets/images/logo/logo.png">

    <!-- Google Fonts: Karla & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Karla:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css?v=<?php echo filemtime(dirname(__DIR__) . '/assets/css/style.css'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40525870-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-40525870-5');
    </script>
    <script>
        window.SITE_BASE_PATH = "<?php echo $base_url; ?>/";
    </script>
    <!-- reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=YOUR_RECAPTCHA_SITE_KEY"></script>


    <!-- Loader CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/loader.css?v=<?php echo filemtime(dirname(__DIR__) . '/assets/css/loader.css'); ?>">
</head>

<body class="">
    <!-- Preloader -->
    <?php include 'components/preloader.php'; ?>
    <?php //include 'components/preloader_fill.php'; 
    ?>

    <header>
        <div class="inner">
            <div class="logo">
                <a href="<?php echo $base_url; ?>/"><img src="<?php echo $base_url; ?>/assets/images/logo/logo.png" alt="Logo"></a>
            </div>
            <div class="burger" id="burger-menu"></div>
            <?php
            include 'routes/web.php';
            $active_route = isset($CURRENT_ROUTE) ? $CURRENT_ROUTE : '';
            ?>
            <nav id="nav-menu">
                <a class="<?php echo ($active_route == '' || $active_route == '/') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>/">Home</a>
                <a class="<?php echo ($active_route == '/about') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>/about">About</a>

                <div class="nav-item-dropdown">
                    <a href="<?php echo $base_url; ?>/products" class="dropdown-trigger <?php echo ($active_route == '/products' || strpos($active_route, '/product') === 0) ? 'active' : ''; ?>">Products</a>
                    <!-- Mega Menu -->
                    <div class="mega-menu">
                        <div class="container-fluid px-lg-5">
                            <div class="row g-4">
                                <?php foreach ($product_categories as $category_name => $items): ?>
                                    <div class="col-lg-4">
                                        <div class="menu-category">
                                            <h5 class="fw-bold text-primary mb-4 text-uppercase letter-spacing-2"><?php echo $category_name; ?></h5>
                                            <ul class="list-unstyled">
                                                <?php foreach ($items as $item_name => $item_link): ?>
                                                    <li><a href="<?php echo $base_url; ?>/<?php echo $item_link; ?>"><?php echo $item_name; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="<?php echo ($active_route == '/gallery') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>/gallery">Gallery</a>
                <a class="<?php echo ($active_route == '/contact') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>/contact">Contact</a>
            </nav>
        </div>
    </header>