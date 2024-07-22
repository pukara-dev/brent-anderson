<div class="site-footer">
    <div class="footer-container">
        <div class="footer-column-1">
            <div class="footer-logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </div>
            <div class="footer-subscribe">
                <p>Download Chapter 1 of my new book: <br><span class="yellow-span">Principles of Movement</span></p>
                <form action="YOUR_FORM_ACTION_URL" method="POST">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit">Download</button>
                </form>
            </div>
        </div>
        <div class="footer-column-2">
            <a href="#" class="footer-contact-button contact-button">Contact Us</a>
            <div class="footer-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu',
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>