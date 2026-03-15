<?php
$host = $_SERVER['HTTP_HOST'];

if ($host === 'localhost' || $host === '127.0.0.1' || $host === '192.168.1.83') {
    $base_url = "http://$host/pkk/";
} else {
    $base_url = 'https://pkkproductions.com/';
}
?>

<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-box">
            <!-- <div class="top-box">
                <h2 class="h1">PKK <br> productions</h2>
            </div> -->
            <div class="bottom-part">
                <!-- <div class="text">
                    <p>© 2025 All Right Reserved.</p>
                </div> -->
                <div class="text">
                    <ul>
                        <li><a href="tel:+918160094725">+91 816 009 4725</a></li>
                        <li><a href="mailto:hello@pkkproductions.com" class="small">hello@pkkproductions.com</a></li>
                    </ul>
                </div>
                <div class="links-box">
                    <ul>
                        <li>
                        <a
                            href="https://www.instagram.com/pkkproductions?igsh=bjVtMjNmZ3E4MnNt"
                            aria-label="PKK Productions Instagram"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="ri-instagram-line" aria-hidden="true"></i>
                        </a>
                        </li>

                        <li>
                        <a
                            href="https://www.facebook.com/share/1DPAHVtRoc/"
                            aria-label="PKK Productions Facebook"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="ri-facebook-fill" aria-hidden="true"></i>
                        </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<a href="https://wa.me/918160094725?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services" target="_blank" class="whatsapp-icon">
  <img src="<?php echo $base_url; ?>assets/images/whatsapp-icon.svg" alt="whatsapp">
</a>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/MotionPathPlugin.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/smooth-scroll.js"></script>
<script src="<?php echo $base_url; ?>assets/js/animation.js"></script>
<script src="<?php echo $base_url; ?>assets/js/custom.js"></script>
</body>

</html>