<?php
$page_css = 'home';
include 'includes/header.php';
?>

<main>
    <section class="banner">
        <div class="banner-box">
            <div class="container">
                <div class="section-heading">
                    <!-- <h1  id="banner-title" class="h2"> Integrated creative <br>studio</h1> -->
                </div>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="container">
            <div class="about-box">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/home-about.webp" alt="service-banner">
                </div>
                <div class="text-box">
                    <h2 class="h3">A boutique branding studio obsessively driven by strategy, relevance, and what’s next</h2>
                    <h3 class="h5">We don’t follow trends. We build brands that outlast them.</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="service">
        <div class="container">
            <div class="section-heading">
                <div class="content-box">
                    <h2 class="h3">About Us</h2>
                    <p>We craft compelling visual narratives that connect brands with their target audiences. From
                        high-end photo shoots to digital experiences and influencer-led campaigns, our work seamlessly
                        blends creativity, strategy, and execution.</p>
                    <p>Every project we take on is designed to deliver clarity, consistency, and visual excellence
                        across platforms.</p>
                </div>
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/logo-bg.webp" alt="pkk-logo">
                </div>
            </div>

            <div class="service-box">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/service-1.webp" alt="service">
                </div>
                <div class="content-box">
                    <div class="service-list">
                        <div class="service-list-item">
                            <img src="<?php echo $base_url; ?>assets/images/service-icon-1.svg" alt="service-icon">
                            <h4 class="h4">Photoshoots</h4>
                            <p>High-quality fashion, product, lifestyle, and brand photography crafted with cinematic
                                lighting and direction.</p>
                        </div>

                        <div class="service-list-item">
                            <img src="<?php echo $base_url; ?>assets/images/service-icon-1.svg" alt="service-icon">
                            <h4 class="h4">Social Media Content</h4>
                            <p>Scroll-stopping visuals and videos designed specifically for Instagram, YouTube, and
                                digital campaigns.</p>
                        </div>

                        <div class="service-list-item">
                            <img src="<?php echo $base_url; ?>assets/images/service-icon-1.svg" alt="service-icon">
                            <h4 class="h4">Website Development</h4>
                            <p>Modern, visually driven websites that align design, performance, and brand storytelling.
                            </p>
                        </div>

                        <div class="service-list-item">
                            <img src="<?php echo $base_url; ?>assets/images/service-icon-1.svg" alt="service-icon">
                            <h4 class="h4">Influencer Marketing</h4>
                            <p>Strategic collaborations with creators and influencers to amplify brand reach and
                                credibility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="we-do">
        <div class="container">
            <div class="section-heading">
                <div class="title">
                    <h2 class="h3">Our Services</h2>
                </div>
                <div class="button-box">
                    <a href="<?php echo $base_url; ?>portfolio.php" class="btn-default">
                        <span>view portfolio</span>
                        <span class="hover-bg"></span>
                    </a>
                </div>
            </div>

            <div class="our-service">
                <div class="service-item">
                    <div class="service-title active">
                        <h3 class="h2">Photoshoots</h3>
                    </div>

                    <div class="service-content is-open">
                        <div class="image-box">
                            <img src="<?php echo $base_url; ?>assets/images/home-photoshoot-service.webp" alt="service-banner">
                        </div>
                        <div class="content-box">
                            <div class="text-box">
                                <h5 class="h5">From Concept to Execution, All In-House.</h5>
                                <!-- <ul>
                                    <li>Celebrity Shoots – Editorial-style portraits with strong visual storytelling
                                    </li>
                                    <li>Campaign Shoots – Brand-driven visuals for ads and promotions</li>
                                    <li>E-commerce Shoots – Clean, conversion-focused product imagery</li>
                                    <li>Product Photography – Detail-oriented visuals that highlight form and quality
                                    </li>
                                </ul> -->
                            </div>
                            <div class="button-box">
                                <a href="<?php echo $base_url; ?>portfolio.php?tab=photoshoot" class="btn-default">
                                    <span>view Work</span>
                                    <span class="hover-bg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-title">
                        <h3 class="h2 odd">AI Powered content</h3>
                    </div>

                    <div class="service-content">
                        <div class="image-box">
                            <img src="<?php echo $base_url; ?>assets/images/home-a.i-service.webp" alt="service-banner">
                        </div>
                        <div class="content-box">
                            <div class="text-box">
                                <h5 class="h5">Content super charged by AI for faster results.</h5>
                                <!-- <ul>
                                    <li>Fashion – AI models, outfits, and concept visuals</li>
                                    <li>Lifestyle – Realistic environments and mood-based storytelling</li>
                                    <li>Automobile – High-impact vehicle visuals and futuristic concepts</li>
                                </ul> -->
                            </div>
                            <div class="button-box">
                                <!-- <a href="<?php echo $base_url; ?>portfolio.php?tab=ai" class="btn-default">
                                    <span>view Work</span>
                                    <span class="hover-bg"></span>
                                </a> -->
                                <a href="<?php echo $base_url; ?>pkk-ai.php" class="btn-default">
                                    <span>view Work</span>
                                    <span class="hover-bg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-title">
                        <h3 class="h2">Social media management</h3>
                    </div>

                    <div class="service-content">
                        <div class="image-box">
                            <img src="<?php echo $base_url; ?>assets/images/home-social-service.webp" alt="service-banner">
                        </div>
                        <div class="content-box">
                            <div class="text-box">
                                <h5 class="h5">Scroll-Stopping Social Media Management.</h5>
                                <!-- <ul>
                                    <li>Social media photos & reels</li>
                                    <li>Content planning & creative direction</li>
                                    <li>Platform-optimized visuals for Instagram, YouTube & digital ads</li>
                                </ul> -->
                            </div>
                            <div class="button-box">
                                <a href="<?php echo $base_url; ?>portfolio.php" class="btn-default">
                                    <span>view Work</span>
                                    <span class="hover-bg"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-black-bg gallery">
        <div class="section-heading">
            <h2 class="h3">Our Gallery</h2>
        </div>

        <div class="gallery-slider owl-carousel">
            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-2.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-3.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-4.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-5.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-6.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-7.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-8.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-9.webp" alt="gallery">
                </div>
            </div>

            <div class="item">
                <div class="image-box">
                    <img src="<?php echo $base_url; ?>assets/images/gallery-10.webp" alt="gallery">
                </div>
            </div>

        </div>

        <!-- <div class="button-box">
            <a href="http://localhost/pkk/contact-us" class="btn-default">
                <span>get started now</span>
                <span class="hover-bg"
                    style="left: 37.2031px; top: 62.6953px; opacity: 0; width: 0px; height: 0px;"></span>
            </a>
        </div> -->
    </section>

    <!-- <section id="turn" class="turn">
        <div class="container">
            <div class="turn-box">
                <div class="img-box">
                    <img src="<?php echo $base_url; ?>assets/images/camara-man.webp" alt="camara man">
                </div>
                <div class="text-box">
                    <h2 class="h2">Let’s Work <br>Together</h2>
                    <p>Have a brand, campaign, or idea in mind?
                        Let’s collaborate and create something impactful.
                    </p>
                    <div class="button-box">
                        <a href="http://localhost/pkk/contact-us" class="btn-default white">
                            <span>Get In Touch</span>
                            <span class="hover-bg"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="trust" class="trust">
        <div class="section-heading">
            <div class="container">
                <h2 class="h3">
                    Trusted by creative <br>brands, and storytellers.
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="trust-box">
                <div class="trust-inner">
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="top-part">
                            <h3 class="h6">
                                MARKO - STARTUP AGANCY
                            </h3>
                        </div>
                        <div class="mid-part">
                            <p>A passionate team of directors, editors & cinematographers lorem ipsum dolot sit amet
                                consecteur.A passionate team of directors, editors & nematographers lorem ipsum dolot
                                sit
                            </p>
                        </div>
                        <div class="end-part">
                            <div class="wallpaper">
                                <img src="<?php echo $base_url; ?>assets/images/gallery-1.webp" alt="wllpaper">
                            </div>
                            <div class="info">
                                <h4 class="h6">ALEX RUSOE</h4>
                                <p>MARKO ANGANCY</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

</main>

<?php include 'includes/footer.php'; ?>