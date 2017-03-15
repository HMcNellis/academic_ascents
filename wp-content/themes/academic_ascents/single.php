<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Zemplate
 * @since Zemplate 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="main-torso single-torso--sidebar">
        <?php 
        $thumbnail_id = get_post_thumbnail_id($post->ID, array( 1500, 475));
        $thumbnail_object = get_post($thumbnail_id);
        ?>
        <div class="masthead__image" style="background-image:url(<?php echo $thumbnail_object->guid; ?>);"></div>
        <div class="single-torso__inner">
            <div class="single__container">
                <article class="single__content">
                    <h1><?php the_title(); ?></h1>

                    <div class="single-torso__posted">
                        <span class="icon icon--calendar"></span> <?php echo get_the_date();?>
                        <?php if(has_tag()) : ?>
                            <br>
                            <?php the_tags('Tagged: ');?>
                        <?php endif;?>
                    </div>

                    <div class="post__text">
                        <?php the_content(); ?>
                    </div> <!-- // post__text -->

                        <aside class="social__buttons">
                            <h5>Share this post:</h5>
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="popup">
                                        <p><span class="icon icon--facebook"></span> <span class="text">facebook</span></p>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=<?php echo $excerpt; ?>" class="popup">
                                        <p><span class="icon icon--linkedin"></span> <span class="text">linkedin</span></p>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?> via @ZenmanDenver" class="popup">
                                        <p><span class="icon icon--twitter"></span> <span class="text">twitter</span></p>
                                    </a>
                                </li>
                                <li class="googleplus">
                                    <a href="https://plus.google.com/share?url=<?php the_title(); the_permalink(); ?>" class="popup">
                                        <p><span class="icon icon--google-plus"></span> <span class="text">google+</span></p>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $post_thumbnail_url; ?>&amp;description=<?php echo $excerpt; ?>">
                                        <p><span class="icon icon--pinterest"></span> <span class="text">pinterest</span></p>
                                    </a>
                                </li>
                            </ul>
                        </aside><!-- // social -->

                    <div class="post__comments">
                        <?php if(!is_attachment()): ?>
                            <?php comments_template( '', true ); ?>
                        <?php endif; ?>
                    </div>  <!-- //post__comments -->
                </article> <!-- //single-torso__content -->
            </div>
        </div> <!-- //single-torso__inner -->
    </section><!-- // single-torso -->
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>