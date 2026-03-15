<?php
$page_css = 'contact-us';
include 'includes/header.php';
?>

<main>
    <section id="contact-us" class="contact-us inner-banner"
        style="background-image: url(<?php echo $base_url; ?>assets/images/contact-us-banner.webp);">
        <div class="container">
            <div class="inner-banner-box">
                <h1 class="h3">
                    Click. Chat. Coffee. <br>Let’s make something great.
                </h1>
            </div>
        </div>
    </section>

    <section id="contact-form" class="contact-form">
        <div class="container">
            <div class="contact-form-box">
                <div class="info-box">
                    <div class="inner-wrap">
                        <div class="box">
                            <!-- <p class="h4">Email</p> -->
                            <h3 class="h3"><a href="mailto:hello@pkkproductions.com" class="lowercase"><i
                                        class="ri-mail-line"></i> hello@pkkproductions.com</a></h3>
                        </div>
                        <div class="box">
                            <!-- <p class="h4">Mobile number</p> -->
                            <h3 class="h3"><a href="tel:+918160094725"><i class="ri-smartphone-line"></i> +91 816 009
                                    4725</a></h3>
                        </div>
                    </div>
                    <div class="box address-box">
                        <!-- <p class="h4">Office Location</p> -->
                        <h3 class="h5"><span>Mumbai</span> : <br>
                            604-Vora Hive 67, Next to Raghuleela Mall, Kandivali West, Mumbai-400067, India</h3>
                        <h3 class="h5"><span>Ahemdabad</span> : <br>
                            B-1012, World Trade Tower, Makarba, SG Highway, Ahmedabad-380051, India</h3>
                        <h3 class="h5"><span>Studio</span> : <br>
                            Satyadev Plaza Society, Veera Desai Industrial Estate, behind Balaji Studios, Andheri West,
                            Mumbai-400053, India</h3>
                    </div>
                </div>
                <div class="form-box">
                    <h2 class="h3">Send us message</h2>

                    <div class="form__group">
                        <form action="<?php echo $base_url; ?>mailer.php" method="POST" class="inquiry__form"
                            id="contactForm">

                            <div class="form-group col-6">
                                <label for="fname">First name</label>
                                <input type="text" id="fname" name="fname" placeholder="First Name" required
                                    autocomplete="given-name">
                            </div>

                            <div class="form-group col-6">
                                <label for="lname">Last name</label>
                                <input type="text" id="lname" name="lname" placeholder="Last Name" required
                                    autocomplete="family-name">
                            </div>

                            <div class="form-group col-12">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="lowercase" name="email"
                                    placeholder="you@company.com" required autocomplete="email">
                            </div>

                            <div class="form-group col-12">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000" required
                                    autocomplete="tel">
                            </div>

                            <div class="form-group col-12">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Leave us a message..."
                                    required></textarea>
                            </div>

                            <div class="button-box form__submit">
                                <button type="submit" class="btn-default">
                                    <span>Send Message</span>
                                    <span class="hover-bg"></span>
                                </button>

                                <div class="loader__wrap">
                                    <div id="formLoader" class="loader" style="display: none;"></div>
                                </div>
                            </div>

                        </form>

                        <div id="inputError" style="display:none; color:#FF0000;">
                            <p class="form__msg"></p>
                        </div>

                        <div id="formSuccess" style="display:none; color:#008000;">
                            <p class="form__msg">Inquiry submitted successfully!</p>
                        </div>

                        <div id="formError" style="display:none; color:#FF0000;">
                            <p class="form__msg">Something went wrong. Please try again later.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map-box">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.4907297672!2d72.25008569347868!3d23.01990207203543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1766460501465!5m2!1sen!2sin"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>

<?php include 'includes/footer.php'; ?>