<article class="single-torso__post">

    <h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <!-- <div class="single-torso__posted">
        <em>Posted on <?php //echo get_the_date();?> by <?php the_author(); ?>. <?php //if(has_tag()):?> <?php //the_tags('Tagged: ');?> <?php //endif;?></em>
    </div>  -->

    <div class="single-torso_content">
    	<?php if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail($post_obj->ID, array( 1500, 475));
        };  ?><?php the_excerpt(); ?>
    </div> <!-- // post -->

</article> <!-- //single__post -->