<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the wrap div and all content
 *
 * @package WordPress
 * @subpackage Zemplate
 * @since Zemplate 1.0
 */
?>

    <footer class="main-foot">
        <div class="main-foot__nav">
            <div class="nav__inner">
                <?php
                    $attr = array(
                        'theme_location'  => 'foot-menu',
                        'container'       => 'nav',
                        'container_class' => 'foot-nav',
                        'menu_class'      => 'menu'
                    );
                    wp_nav_menu($attr);
                ?>
                <span>
                    <a href="https://plus.google.com/101797558817707317403" title="Google+" target="_blank" rel="nofollow">
                        <svg>
                            <use xlink:href="#google-plus"></use>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/academicascents?notif_t=fbpage_fan_invite" title="Facebook" target="_blank" rel="nofollow">
                        <svg>
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                </span>
                <p>Academic Ascents © Copyright <?php echo date('Y'); ?></p>
            </div>
        </div>
    </footer><!-- // main-foot -->
<!-- sticky footer will fail if anything goes between the closing footer and .wrap -->
</div><!-- // wrap-all-the-things -->

<?php wp_footer(); //mandatory ?>

</body>
</html>