<?php
$page_css = 'portfolio';
include 'includes/header.php';
?>

<main>

    <section id="portfolio" class="portfolio inner-banner">
        <div class="container">
        </div>
    </section>

    <section id="work-tab" class="work-tab">
        <div class="container">
            <div class="tabs-wrapper">

                <!-- MAIN TABS -->
                <ul class="main-tabs">
                    <li class="active" data-tab="photoshoot">Photoshoot</li>
                    <li data-tab="ai">AI Powered Content</li>
                </ul>

                <?php
                function renderImages($baseUrl, $relativeDir, $pattern) {
                    $serverPath = $_SERVER['DOCUMENT_ROOT'] . parse_url($baseUrl, PHP_URL_PATH) . $relativeDir;
                    $images = glob($serverPath . $pattern);

                    if ($images) {
                    foreach ($images as $img) {
                        $fileName = basename($img);
                        echo '<div class="img-box">';
                        echo '<img 
                            src="' . $baseUrl . $relativeDir . $fileName . '" 
                            alt="" 
                            loading="lazy"
                            decoding="async"
                        >';
                        echo '</div>';
                    }
                    }
                }

                function renderSliderBlock($baseUrl, $title, $pattern) {
                    echo '<div class="subcategory-block">';
                    echo '<h3 class="sub-title h4">' . $title . '</h3>';
                    echo '<div class="owl-carousel portfolio-slider">';
                    renderImages($baseUrl, 'assets/images/', $pattern);
                    echo '</div>';
                    echo '</div>';
                }
                ?>

                <!-- CONTENT -->
            </div>
        </div>
        <div class="tab-contents">

            <!-- PHOTOSHOOT -->
            <div class="content active" data-tab-content="photoshoot">
            <?php
                renderSliderBlock($base_url, 'Celebrity Shoot', 'celebrity-shoot-*.webp');
                renderSliderBlock($base_url, 'Saree Shoot', 'saree-*.webp');
                renderSliderBlock($base_url, "Women's Wear", 'women-*.webp');
                renderSliderBlock($base_url, "Men's Wear", 'men-*.webp');
                renderSliderBlock($base_url, 'Footwear Shoot', 'footwear-*.webp');
                renderSliderBlock($base_url, 'Inner Wear', 'inner-wear-*.webp');
                renderSliderBlock($base_url, 'Maternity Wear', 'maternity-*.webp');
                renderSliderBlock($base_url, 'Kids Shoot', 'kids-*.webp');
                renderSliderBlock($base_url, 'Lingerie Shoot', 'lingerie-*.webp');
                renderSliderBlock($base_url, 'Leggings Shoot', 'leggings-*.webp');
            ?>
            </div>

            <!-- AI -->
            <div class="content" data-tab-content="ai">
            <?php
                renderSliderBlock($base_url, 'Apparel', 'apparel-*.webp');
                renderSliderBlock($base_url, 'Ethnic', 'ethnic-*.webp');
                renderSliderBlock($base_url, 'Footwear', 'ai-footwear-*.webp');
                renderSliderBlock($base_url, 'Jewelery', 'jewelery-*.webp');
            ?>
            </div>

        </div>
    </section>

    <div class="portfolio-lightbox" id="portfolioLightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-img" src="" alt="">
    </div>

</main>

<?php include 'includes/footer.php'; ?>