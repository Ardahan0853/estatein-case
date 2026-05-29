<!-- ============ FOOTER ============ -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">

            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="<?php echo estatein_img('footer-logo.webp'); ?>" alt="Estatein" width="140" height="36" loading="lazy" decoding="async">
                </a>
                <form class="footer-email" id="newsletter-form" novalidate>
                    <input type="email" name="email" placeholder="Enter Your Email" aria-label="Email address" required>
                    <button type="submit" aria-label="Subscribe">
                        <img src="<?php echo estatein_img('icon-send.svg'); ?>" alt="" width="16" height="16">
                    </button>
                </form>
                <p class="footer-email-msg" role="status" aria-live="polite"></p>
            </div>

            <?php
            $cols = array(
                'Home' => array('Hero Section','Features','Properties','Testimonials','FAQ\'s'),
                'About Us' => array('Our Story','Our Works','How It Works','Our Team','Our Clients'),
                'Properties' => array('Portfolio','Categories'),
                'Services' => array('Valuation Mastery','Strategic Marketing','Negotiation Wizardry','Closing Success','Property Management'),
                'Contact Us' => array('Contact Form','Our Offices'),
            );
            foreach ($cols as $title => $links) : ?>
                <div class="footer-col">
                    <h4><?php echo esc_html($title); ?></h4>
                    <ul>
                        <?php foreach ($links as $link) : ?>
                            <li><a href="#"><?php echo esc_html($link); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="footer-bottom">
            <div class="footer-copy">
                @<?php echo date('Y'); ?> Estatein. All Rights Reserved. &nbsp; <a href="#">Terms &amp; Conditions</a>
            </div>
            <div class="footer-social">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="LinkedIn">in</a>
                <a href="#" aria-label="Twitter">&#120143;</a>
                <a href="#" aria-label="YouTube">&#9658;</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
