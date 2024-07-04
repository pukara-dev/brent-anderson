<?php wp_footer(); ?>
<div class="site-footer">
    <div class="footer-container">
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
            <p>Download Chapter 1 of my new book: <span>Principles of Movement</span></p>
            <form action="YOUR_FORM_ACTION_URL" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Download</button>
            </form>
        </div>
        <div class="footer-navigation">
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_class' => 'footer-menu',
				)
			);
			?>
            <a href="YOUR_CONTACT_URL" class="footer-contact-button">Contact Us</a>
        </div>
    </div>
</div>
</body>

</html>