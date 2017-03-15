<?php
/**
 * The template for displaying category archive pages.
 *
 * @package WordPress
 * @subpackage Zemplate
 * @since Zemplate 3.0
 */

get_header(); ?>
<section>
    <?php $page_id = '6'; ?>
    <div class="hero-background">
        <div class="page-head__hero hero">
            <?php //if there's more than one hero ?>
            <?php if(get_field('hero', $page_id) && count(get_field('hero', $page_id)) > 1) : ?>
                <div class="hero--slider">
                    <div class="hero__slider flexslider">
                        <ul class="slides">
                            <?php while(has_sub_field('hero', $page_id)) : ?>
                                <?php $herotextposition = get_sub_field('text_position');
                                    if($herotextposition == 'textright')
                                     $herotextclass = 'hero__text-right';
                                    elseif($herotextposition == 'textleft')
                                     $herotextclass ='hero__text-left'; 
                                 ?>
                                <?php $img_acf = get_sub_field('hero_image', $page_id); ?> 
                                <?php $img_acf = $img_acf['sizes']; ?>
                                <?php $title_acf = get_sub_field('hero_title', $page_id); ?>
                                <?php $title_sub = get_sub_field('hero_sub_title', $page_id); ?>
                                <?php if($img_acf) : ?>

                                <?php     //text background colors
                                    $acf_background = get_sub_field('add_background_color_to_text');
                                    if($acf_background == 'add')
                                     $class = 'background';
                                    elseif($acf_background == 'remove')
                                     $class ='no-background'; 
                                 ?>
                                    <li class="hero__slide-item" style="background-image:url(<?php echo $img_acf['masthead']; ?>);"><!-- user configurable background image url -->
                                        <div>
                                            <div class="hero__inner">
                                                <div class="<?php echo $herotextclass . ' ' . $class; ?>">
                                                    <?php if($title_acf) : ?>
                                                        <h2><?php echo $title_acf; ?></h2>
                                                    <?php endif; ?>
                                                    <?php if($title_sub) : ?>
                                                        <h3><?php echo $title_sub; ?></h3>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div> 
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php //if there's only one hero ?>
            <?php else : ?>
                <?php while(has_sub_field('hero', $page_id)) : ?>
                    <?php $herotextposition = get_sub_field('text_position', $page_id);
                        if($herotextposition == 'textright')
                         $herotextclass = 'hero__text-right';
                        elseif($herotextposition == 'textleft')
                         $herotextclass ='hero__text-left'; 
                     ?>
                    <?php $img_acf = get_sub_field('hero_image', $page_id); ?>
                    <?php $title_acf = get_sub_field('hero_title', $page_id); ?>
                    <?php $title_sub = get_sub_field('hero_sub_title', $page_id); ?>
                    <?php if($img_acf) : ?>
                        <div class="hero--single" style="background-image:url(<?php echo $img_acf['sizes']['masthead']; ?>);"><!-- user configurable background image url -->
                            <div class="hero__inner">
                                <div class="<?php echo $herotextclass; ?>">
                                    <?php if($title_acf) : ?>
                                        <h2><?php echo $title_acf; ?></h2>
                                    <?php endif; ?>
                                    <?php if($title_sub) : ?>
                                        <h3><?php echo $title_sub; ?></h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
</section>
<section class="main-torso complete-blog cat-torso--sidebar">
            <h2><?php echo single_cat_title('', false); ?></h2>
    <div class="cat-torso__inner">
        <article class="cat-torso__content">
            
            <?php
                while (have_posts()) : the_post();
                    get_template_part('templates/parts/blog', 'excerpt');
                endwhile;
            ?>
            <div class="pagination-block"><?php get_template_part('templates/parts/blog','pagination'); ?></div>
        </article><!-- //cat-torso__content -->
        <aside class="cat-torso__sidebar">
            <?php get_sidebar(); ?>
        </aside><!-- //cat-torso__sidebar -->
    </div><!-- //cat-torso__inner -->
</section><!-- //cat-torso -->

<?php get_footer(); ?>