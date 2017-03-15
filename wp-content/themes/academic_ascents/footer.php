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
                <span><a href="https://plus.google.com/100495753123082046193" rel="publisher" title="Google+" target="_blank"><img src="http://academicascents.com/wp-content/themes/academic_ascents/images/googleplus.png" width="36px"></a><a href="https://www.facebook.com/academicascents?notif_t=fbpage_fan_invite" title="Facebook" target="_blank"><img src="http://academicascents.com/wp-content/themes/academic_ascents/images/facebook.png" width="36px"></a></span>
                <p>Academic Ascents © Copyright <?php echo date('Y'); ?></p>
            </div>
        </div>
    </footer><!-- // main-foot -->
<!-- sticky footer will fail if anything goes between the closing footer and .wrap -->
</div><!-- // wrap-all-the-things -->

<?php wp_footer(); //mandatory ?>

</body>
</html>