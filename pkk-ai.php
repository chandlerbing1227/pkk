<?php
$page_css = 'pkk-ai';
include 'includes/header.php';
?>

<main>
  <section class="lp-hero">
    <div class="container">
      <div class="hero-box">
        <h1 class="h1">Your New‑age Tech Partner<br><span>PKK Productions</span></h1>
        <p>Create professional, studio‑quality visuals quickly with an AI‑powered workflow.</p>
        <div class="button-box">
          <a href="<?php echo $base_url; ?>contact-us.php" class="btn-default"><span>Get Started</span><span
              class="hover-bg"></span></a>
          <!-- <a href="#" class="btn-default white"><span>See Pricing</span><span class="hover-bg"></span></a> -->
        </div>
      </div>
    </div>
  </section>

  <section class="lp-grid">
    <div class="container">
      <h3 class="h4">1ST SAMPLE CREATIVE FREE</h3>

      <div class="grid">
        <div class="card">
          <div class="img">
            <img src="<?php echo $base_url; ?>assets/images/artboard-1.webp" alt="artboard">
          </div>
          <div class="meta">
            <p>Fully Remote</p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="<?php echo $base_url; ?>assets/images/artboard-2.webp" alt="artboard">
          </div>
          <div class="meta">
            <p>At 50% Cost</p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="<?php echo $base_url; ?>assets/images/artboard-3.webp" alt="artboard">
          </div>
          <div class="meta">
            <p>First Shoot Free</p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="<?php echo $base_url; ?>assets/images/artboard-4.webp" alt="artboard">
          </div>
          <div class="meta">
            <p>Trusted by 10K+</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lp-collection">
    <div class="container">
      <div class="title">
        <h3 class="h3">Same Colour, Different Locations</h3>
      </div>
      <div class="masonry">
        <div class="box">
          <img src="<?php echo $base_url; ?>assets/images/color-1.webp" alt="color">
        </div>
        <div class="box">
          <img src="<?php echo $base_url; ?>assets/images/color-2.webp" alt="color">
        </div>
        <div class="box">
          <img src="<?php echo $base_url; ?>assets/images/color-3.webp" alt="color">
        </div>
      </div>
    </div>
  </section>

  <section class="lp-collection">
    <div class="container">
      <div class="title">
        <h3 class="h3">Same Outfit, Different Countries</h3>
      </div>
      <div class="masonry">
        <div class="box">
          <img src="<?php echo $base_url; ?>assets/images/outfit-1.webp" alt="outfit">
        </div>
        <div class="box">
          <img src="<?php echo $base_url; ?>assets/images/outfit-2.webp" alt="outfit">
        </div>
        <div class="box">
          <img src="<?php echo $base_url; ?>assets/images/outfit-3.webp" alt="outfit">
        </div>
      </div>
    </div>
  </section>

  <section class="lp-why">
    <div class="container">
      <div class="section-heading">
        <h3 class="h3">Why PKK Studios?</h3>
      </div>
      <div class="why-grid">
        <div class="item">
          <div class="icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
              <path d="M2 17l10 5 10-5"></path>
              <path d="M2 12l10 5 10-5"></path>
            </svg>
          </div>
          <h5 class="h5">AI‑Powered Workflow</h5>
          <p>Faster planning, consistent output, and effortless revisions.</p>
        </div>
        <div class="item">
          <div class="icon"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M9 12l2 2 4-4"></path>
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <h5 class="h5">Production Ready</h5>
          <p>Studio‑quality lighting, framing, and styling standards.</p>
        </div>
        <div class="item">
          <div class="icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
          </div>
          <h5 class="h5">Remote‑First</h5>
          <p>No travel needed—shoots coordinated across locations.</p>
        </div>
        <div class="item">
          <div class="icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M3 6h18l-2 13H5L3 6z"></path>
              <path d="M3 6L2 2H1"></path>
              <circle cx="9" cy="20" r="1"></circle>
              <circle cx="20" cy="20" r="1"></circle>
              <path d="M12 8v4l2 2"></path>
            </svg>
          </div>
          <h5 class="h5">Scale With Ease</h5>
          <p>From one campaign to multi‑brand catalogs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="lp-logos">
    <div class="container">
      <div class="section-heading">
        <h3 class="h3">Brands That Trust Us</h3>
      </div>

      <div class="slider-box">

        <div class="creative-slider owl-carousel owl-theme">
          <div class="item">
            <img src="<?php echo $base_url; ?>assets/images/pkk-logo-white.svg" alt="brand logo">
          </div>
          <div class="item">
            <img src="<?php echo $base_url; ?>assets/images/pkk-logo-white.svg" alt="brand logo">
          </div>
          <div class="item">
            <img src="<?php echo $base_url; ?>assets/images/pkk-logo-white.svg" alt="brand logo">
          </div>
          <div class="item">
            <img src="<?php echo $base_url; ?>assets/images/pkk-logo-white.svg" alt="brand logo">
          </div>
          <div class="item">
            <img src="<?php echo $base_url; ?>assets/images/pkk-logo-white.svg" alt="brand logo">
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="lp-cta">
    <div class="container">
      <div class="cta-box">
        <div class="text">
          <h3 class="h3">With PKK Productions, You Achieve</h3>
          <p>Better visuals, faster turnarounds, and consistent brand stories.</p>
        </div>
        <div class="stats">
          <div class="stat">
            <div class="h4">+125%</div>
            <p>Faster Delivery</p>
          </div>
          <div class="stat">
            <div class="h4">-70%</div>
            <p>Production Cost</p>
          </div>
          <div class="stat">
            <div class="h4">10K+</div>
            <p>Assets Delivered</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lp-studio">
    <div class="container">
      <div class="studio-box">
        <div class="left">
          <video controls width="100%" preload="metadata" controlsList="nodownload">

            <source src="<?php echo $base_url; ?>assets/images/pkk-ai-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="right">
          <!-- <h4 class="h4">Existing Customer?</h4>
          <p>Log in to your dashboard to view assets and request new shoots.</p> -->
          <div class="button-box">
            <!-- <a href="#" class="btn-default"><span>Log In</span><span class="hover-bg"></span></a> -->
            <a href="<?php echo $base_url; ?>contact-us.php" class="btn-default white"><span>AI Starts
                Here</span><span class="hover-bg"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lp-blog">
    <div class="container">
      <div class="section-heading">
        <h3 class="h3">Latest from Our Blog</h3>
      </div>
      <div class="blog-grid">
        <article class="post">
          <div class="thumb">
            <img src="<?php echo $base_url; ?>assets/images/blog-1.webp" alt="blog">
          </div>
          <div class="content">
            <h6 class="h6">Creative Styling at Scale</h6>
            <p>How to keep quality consistent across locations.</p>
          </div>
        </article>
        <article class="post">
          <div class="thumb">
            <img src="<?php echo $base_url; ?>assets/images/blog-2.webp" alt="blog">
          </div>
          <div class="content">
            <h6 class="h6">AI in the Studio</h6>
            <p>From planning to post‑production.</p>
          </div>
        </article>
        <article class="post">
          <div class="thumb">
            <img src="<?php echo $base_url; ?>assets/images/blog-3.webp" alt="blog">
          </div>
          <div class="content">
            <h6 class="h6">Visual Identity Basics</h6>
            <p>Set up a reusable shooting framework.</p>
          </div>
        </article>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
