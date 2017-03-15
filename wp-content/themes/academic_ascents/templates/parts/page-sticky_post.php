<article class="sticky-post">
    <div class="sticky-post__inner">
        <?php if(get_sub_field('sticky_post_post')) : ?>
            <?php while(has_sub_field('sticky_post_post')) : ?>
                    <?php if(get_sub_field('post')) : ?>
                        <div class="sticky-posts__group">
                                <?php $post_obj = get_sub_field('post'); ?>
                                <a href="<?php echo get_permalink($post_obj) ?>" title="<?php echo get_the_title($post_obj->ID); ?>">
                                    <h3><?php 
                                      if (strlen(get_the_title($post_obj->ID)) > 38){
                                       echo substr(get_the_title($post_obj->ID),0,38).'...';
                                      }else{
                                        echo get_the_title($post_obj->ID); 
                                      }
                                    ?></h3>
                                    <?php echo get_the_post_thumbnail($post_obj->ID, array( 1500, 475)); ?>
                                    <?php $exc = get_sub_field('text_excerpt'); if($exc) : ?>
                                        <p><?php echo $exc; ?></p>
                                    <?php endif; ?>
                                    Read More >>
                                </a>
                        </div><!--sticky-posts-->
                    <?php endif; ?>
                <?php endwhile; ?>
        <?php endif; ?>
    </div>
</article>