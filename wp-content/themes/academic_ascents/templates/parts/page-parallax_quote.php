<?php $img_acf = get_sub_field('parallax_quote_image'); ?> 
<?php $img_acf = $img_acf['sizes']; ?>
<?php $quote_id = get_sub_field('quote_content_id'); ?>
<article class="quote" id="<?php echo $quote_id; ?>">
    <div class="quote-block" style="background-image:url(<?php echo $img_acf['large']; ?>);">
        <div class="quote__filter">
        <div class="quote__inner">
            <div class="quote__slider flexslider">
                <ul class="slides">
                    <?php while(has_sub_field('quote_block')) : ?>  
                        <?php if(get_sub_field('parallax_quote_text')) : ?>
                            <?php $txt = get_sub_field('parallax_quote_text'); ?>
                            <?php $name = get_sub_field('parallax_quote_name'); ?>
                            <li class="quote__slide-item">                
                                <blockquote>
                                    "<?php echo $txt; ?>"
                                </blockquote>
                                <?php if(get_sub_field('parallax_quote_name')) : ?>
                                    <p class="quote__author">
                                        - <?php echo $name; ?>
                                    </p>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>    
                </ul>
            </div><!-- //flexslider --> 
        </div><!-- //quote__inner -->
        </div>
    </div><!-- //quote -->
</article>