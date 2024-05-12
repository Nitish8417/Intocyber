<footer>
    <section class="main-footer">
        <div class="container">
            <div class="top-footer">
                <div class="footer-item">
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="footer-item">
                    <nav class="footer-navbar">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'footer',
                        ));
                        ?>
                    </nav>
                </div>
                <div class="footer-item">
                    <div class="sub-tel-info">
                        <ul>
                            <li><a href="tel:+971508794459"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a href="tel:+971508794459"> +971508794459</a></li>
                        </ul>|
                        <ul>
                            <li><a href="mailto:info@intocybers.com"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="mailto:info@intocybers.com">info@intocybers.com</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright-block">
                    <div>
                        <?php
                        printf(
                            esc_html__('&copy; %s %s. All Rights Reserved.', 'IntoCyber'),
                            date('Y'),
                            esc_html(get_bloginfo('name'))
                        );
                        ?>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/In.svg" alt=""></a></li>
                        </ul>
                    </div>


                </div>
                <div class="footer-links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'links',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </section>

</footer>
<?php wp_footer(); ?>
</div>

<script>
    $(document).ready(function() {
        $('.hamburger-menu-icon').click(function() {
            $('#main-nav-block').toggle();
            if ($('#main-nav-block').is(':visible')) {
                $('img.show').hide();
                $('img.close').show();
            } else {
                $('img.show').show();
                $('img.close').hide();
            }
        });
    });
</script>
   
</body>

</html>