<!DOCTYPE html>
<html lang="en">

<?php
$host = $_SERVER['HTTP_HOST'];

if ($host === 'localhost' || $host === '127.0.0.1' || $host === '192.168.1.83') {
    $base_url = "http://$host/pkk/";
} else {
    $base_url = 'https://pkkproductions.com/';
}

$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$request_path = rtrim($request_path, '/');
$request_path = $request_path === '' ? '/' : $request_path;

$base_path = parse_url($base_url, PHP_URL_PATH) ?: '/';
$base_path = rtrim($base_path, '/');

$home_paths = ($base_path === '')
    ? ['/', '/index.php']
    : [$base_path, "$base_path/index.php"];

$is_home = in_array($request_path, $home_paths, true);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKK Productions</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>assets/images/pkk-favicon.svg">

    <meta name="description"
        content="Based in Mumbai and Ahmedabad, we are a dynamic production house specializing in exceptional photoshoots, video shoots, and AI-driven content creation.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/scss/index.css">

    <?php if (!empty($page_css)): ?>
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/scss/pages/<?php echo $page_css; ?>.css">
    <?php endif; ?>
</head>


<body>

    <header class="header">
        <div class="container">
            <div class="header-box">
                <div class="logo-box">
                    <a href="<?php echo $base_url; ?>">
                        <img
                            <?php if ($is_home) echo 'id="site-logo"'; ?>
                            src="<?php echo $base_url; ?>assets/images/pkk-logo.svg"
                            alt="site logo">
                    </a>
                </div>
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <div class="main-nav">
                    <div class="animated-box">
                        <div class="first-box box"></div>
                        <div class="second-box box"></div>
                        <div class="third-box box"></div>
                    </div>
                    <div class="nav-wrap">
                        <nav>
                            <ul>
                                <li><a href="<?php echo $base_url; ?>">Home</a></li>
                                <li><a href="<?php echo $base_url; ?>about.php">About Us</a></li>
                                <li><a href="<?php echo $base_url; ?>portfolio.php">Portfolio</a></li>
                                <li><a href="<?php echo $base_url; ?>contact-us.php">Contact Us</a></li>
                            </ul>
                        </nav>
                        <!-- <div class="button-box mobile">
                            <a href="<?php echo $base_url; ?>contact-us" class="btn-default white">
                                <span>get a quote</span>
                                <span class="hover-bg"></span>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="button-box desktop">
                    <a href="<?php echo $base_url; ?>contact-us" class="btn-default">
                        <span>get a quote</span>
                        <span class="hover-bg"></span>
                    </a>
                </div> -->
            </div>
        </div>
    </header>