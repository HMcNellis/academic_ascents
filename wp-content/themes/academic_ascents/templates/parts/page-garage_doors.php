<?php 
  $garage_id = get_sub_field('garage_content_id');
?>
<article class= "garage-door" id="<?php echo $garage_id; ?>">
  <div class="garage-door__inner">
      <?php $field_acf = get_sub_field('garage_door_title'); if($field_acf) : ?>
          <div class="garage-door__title-wrap">
              <h1 class="garage-door__title"><?php echo $field_acf; ?></h1>
          </div>
      <?php endif; ?>
      <?php if(get_sub_field('garage_door_text')) : ?>
            <p><?php the_sub_field('garage_door_text'); ?></p>
      <?php endif; ?>
      <div class="cta-case"> 
       <?php if(get_sub_field('cta')) : ?>
          <?php while(has_sub_field('cta')) : ?>
            <?php $title = get_sub_field('cta_title'); ?>
            <?php $stitle = get_sub_field('cta_sub_title'); ?>
            <?php $text = get_sub_field('cta_inside_text'); ?>
              <div class="cta-wrap">
                  <div>
                      <div class="cta-cover">
                        <?php $img_acf = get_sub_field('cta_image'); if($img_acf) : ?>
                          <div>
                            <div class="cta__img" style="background-image:url(<?php echo $img_acf['sizes']['garage-door']; ?>);">
                            </div>
                          </div>
                        <?php endif; ?>
                        <span class="cta-cover_text">
                          <h3><?php echo $title; ?></h3>
                          <p><?php echo $stitle; ?></p>
                        </span>
                      </div><!-- //cta-cover -->
                      <div class="cta-inside">
                        <p><?php echo $text; ?></p>
                      </div>
                  </div>
              </div><!-- //cta-wrap -->
          <?php endwhile; ?>
      <?php endif; ?>     
      </div>   
  </div><!-- //inner -->
</article>