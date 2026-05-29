<?php get_header(); ?>

<!-- ============ HERO ============ -->
<section class="hero" id="main-content">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <h1>Discover Your Dream Property with Estatein</h1>
                <p>Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
                <div class="hero-actions">
                    <a href="#" class="btn-outline">Learn More</a>
                    <a href="#" class="btn-primary">Browse Properties</a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="stat-num">200+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-num">10k+</div>
                        <div class="stat-label">Properties For Clients</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-num">16+</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-badge">
                    <svg class="hero-badge-ring" viewBox="0 0 200 200">
                        <defs>
                            <path id="heroCirclePath" d="M 100,100 m -74,0 a 74,74 0 1,1 148,0 a 74,74 0 1,1 -148,0" />
                        </defs>
                        <text>
                            <textPath href="#heroCirclePath" startOffset="0">
                                ✦ Discover Your Dream Property &nbsp; ✦ Discover Your Dream Property &nbsp;
                            </textPath>
                        </text>
                    </svg>
                    <span class="hero-badge-arrow">
                        <img src="<?php echo estatein_img('hero-arrow.svg'); ?>" alt="">
                    </span>
                </div>
                <img class="hero-photo" src="<?php echo estatein_img('hero-building.webp'); ?>" alt="Modern glass high-rise building" width="620" height="660" fetchpriority="high" decoding="async">
            </div>
        </div>
    </div>
</section>

<!-- ============ FEATURES ============ -->
<section class="features">
    <div class="container">
        <div class="features-grid">
            <?php
            $features = array(
                array('Find Your Dream Home', 'icon-find-home.svg'),
                array('Unlock Property Value', 'icon-property-value.svg'),
                array('Effortless Property Management', 'icon-management.svg'),
                array('Smart Investments, Informed Decisions', 'icon-investments.svg'),
            );
            foreach ($features as $f) : ?>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo estatein_img($f[1]); ?>" alt="">
                    </div>
                    <div class="feature-card-foot">
                        <h3><?php echo esc_html($f[0]); ?></h3>
                        <img class="feature-arrow" src="<?php echo estatein_img('arrow-up-right.svg'); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ FEATURED PROPERTIES ============ -->
<section class="properties">
    <div class="container">
        <div class="section-head">
            <div class="section-title">
                <div class="sparkle"><span>✦</span><span>✦</span><span>✦</span></div>
                <h2>Featured Properties</h2>
                <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</p>
            </div>
            <a href="#" class="btn-outline head-btn">View All Properties</a>
        </div>

        <div class="properties-grid">
            <?php
            $properties = array(
                array('Seaside Serenity Villa', 'A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood', 'property-seaside-villa.webp', '$550,000', array('4-Bedroom','3-Bathroom','Villa')),
                array('Metropolitan Haven', 'A chic and fully-furnished 2-bedroom apartment with panoramic city views', 'property-metropolitan.webp', '$550,000', array('2-Bedroom','2-Bathroom','Villa')),
                array('Rustic Retreat Cottage', 'An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community', 'property-rustic-cottage.webp', '$550,000', array('3-Bedroom','3-Bathroom','Villa')),
            );
            $tagicons = array('icon-bed.svg','icon-bath.svg','icon-villa.webp');
            foreach ($properties as $p) : ?>
                <div class="property-card">
                    <img src="<?php echo estatein_img($p[2]); ?>" alt="<?php echo esc_attr($p[0]); ?>" width="380" height="220" loading="lazy" decoding="async">
                    <h3><?php echo esc_html($p[0]); ?></h3>
                    <p class="prop-desc"><?php echo esc_html($p[1]); ?>... <a href="#" class="read-more">Read More</a></p>
                    <div class="property-tags">
                        <?php foreach ($p[4] as $i => $tag) : ?>
                            <span class="property-tag">
                                <img src="<?php echo estatein_img($tagicons[$i]); ?>" alt=""><?php echo esc_html($tag); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <div class="property-footer">
                        <div class="property-price">
                            <div class="price-label">Price</div>
                            <div class="price-value"><?php echo esc_html($p[3]); ?></div>
                        </div>
                        <a href="#" class="btn-primary">View Property Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="slider-footer">
            <div class="slider-count"><b>01</b> of 60</div>
            <div class="slider-nav">
                <button aria-label="Previous">&#8592;</button>
                <button aria-label="Next">&#8594;</button>
            </div>
        </div>
    </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="testimonials">
    <div class="container">
        <div class="section-head">
            <div class="section-title">
                <div class="sparkle"><span>✦</span><span>✦</span><span>✦</span></div>
                <h2>What Our Clients Say</h2>
                <p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
            </div>
            <a href="#" class="btn-outline head-btn">View All Testimonials</a>
        </div>

        <div class="testimonials-grid">
            <?php
            $testimonials = array(
                array('Exceptional Service!', "Our experience with Estatein was outstanding. Their team's dedication and professionalism made finding our dream home a breeze. Highly recommended!", 'Wade Warren', 'USA, California', 'avatar-wade-warren.webp'),
                array('Efficient and Reliable', "Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn't be happier with the results.", 'Emelie Thomson', 'USA, Florida', 'avatar-emelie-thomson.webp'),
                array('Trusted Advisors', 'The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!', 'John Mans', 'USA, Nevada', 'avatar-john-mans.webp'),
            );
            foreach ($testimonials as $t) : ?>
                <div class="testimonial-card">
                    <div class="stars"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span></div>
                    <h3><?php echo esc_html($t[0]); ?></h3>
                    <p class="quote"><?php echo esc_html($t[1]); ?></p>
                    <div class="testimonial-author">
                        <img src="<?php echo estatein_img($t[4]); ?>" alt="Photo of <?php echo esc_attr($t[2]); ?>" width="46" height="46" loading="lazy" decoding="async">
                        <div>
                            <div class="author-name"><?php echo esc_html($t[2]); ?></div>
                            <div class="author-loc"><?php echo esc_html($t[3]); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="slider-footer">
            <div class="slider-count"><b>01</b> of 10</div>
            <div class="slider-nav">
                <button aria-label="Previous">&#8592;</button>
                <button aria-label="Next">&#8594;</button>
            </div>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="faq">
    <div class="container">
        <div class="section-head">
            <div class="section-title">
                <div class="sparkle"><span>✦</span><span>✦</span><span>✦</span></div>
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.</p>
            </div>
            <a href="#" class="btn-outline head-btn">View All FAQ's</a>
        </div>

        <div class="faq-grid">
            <?php
            $faqs = array(
                array('How do I search for properties on Estatein?', 'Learn how to use our user-friendly search tools to find properties that match your criteria.'),
                array('What documents do I need to sell my property through Estatein?', 'Find out about the necessary documentation for listing your property with us.'),
                array('How can I contact an Estatein agent?', 'Discover the different ways you can get in touch with our experienced agents.'),
            );
            foreach ($faqs as $q) : ?>
                <div class="faq-card">
                    <h3><?php echo esc_html($q[0]); ?></h3>
                    <p><?php echo esc_html($q[1]); ?></p>
                    <a href="#" class="btn-outline">Read More</a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="slider-footer">
            <div class="slider-count"><b>01</b> of 10</div>
            <div class="slider-nav">
                <button aria-label="Previous">&#8592;</button>
                <button aria-label="Next">&#8594;</button>
            </div>
        </div>
    </div>
</section>

<!-- ============ CTA ============ -->
<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <div>
                <h2>Start Your Real Estate Journey Today</h2>
                <p>Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
            </div>
            <a href="#" class="btn-primary">Explore Properties</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
