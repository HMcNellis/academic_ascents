<?php
    //special classes
    $content_section = get_sub_field('content_block_content');
    $classes = '';
    $group_count = count($content_section);
    if($group_count <= 3){
        $classes .= ' thirds--' . $group_count;
        if($group_count == 2){
            $classes .= ' thirds__two-col--' . get_sub_field('content_two_column_handling');
        }
    } else {
        $classes .= ' thirds--slider';
    }
    $special_class = get_sub_field('content_class');
    if($special_class){
        $classes .= ' ' . $special_class;
    }

    $anchor_id = get_sub_field('content_id');

     //animate
    $animate = get_sub_field('animate_image');
    if($animate[0] == 'true')
        $animate_class = 'img' . get_sub_field('animate_direction');

     //background colors
    $acf_background = get_sub_field('background_color');
    if($acf_background == 'blue')
     $class = 'content-block_blue';
    if($acf_background == 'green')
     $class = 'content-block_green';
    elseif($acf_background == 'white')
     $class ='content-block_white';

    //empty divs
    $empty_div_array = array();
    if($group_count <= 3){
        for($i = 0; $i < $group_count; $i++) {
            $emptyness = 'full';
            $content_block_content = get_sub_field('content_block_content');
            if(($content_block_content[$i]['content_text'] == '')){
                $emptyness = 'empty';
            }
            $empty_div_array[$i] = $emptyness;
        }
    }
?>

<article class="page__group content-block thirds<?php echo $classes . ' ' . $class . ' ' . $animate_class; ?>" id="<?php echo $anchor_id; ?>">
    <div class="content-block__inner">
        <?php $field_acf = get_sub_field('content_block_title'); if($field_acf) : ?>
            <div class="content-block__title-wrap">
                <h1 class="content-block__title"><?php echo $field_acf; ?></h1>
            </div>
        <?php endif; ?>
        <?php if(count($content_section) <= 3) : $i = 0; //if normal 1-3 groups of content ?>
            <?php while(has_sub_field('content_block_content')) : $i++; ?>
                <?php $btn_words = get_sub_field('button_cta_text'); 
                        $btn_link = get_sub_field('button_cta_link'); ?>
                <?php if(get_sub_field('content_text') != '') : ?>
                    <?php
                        $empty_class = '';
                        if($i == 2) {
                            if($empty_div_array[$i - 2] == 'empty'){
                                $empty_class .=' thirds__group--no-prev';
                            }
                        } elseif ($i == 3){
                            if($empty_div_array[$i - 2] == 'empty'){
                                $empty_class .=' thirds__group--no-prev';
                            }
                            if($empty_div_array[$i - 3] == 'empty'){
                                $empty_class .=' thirds__group--no-prev-2';
                            }
                        }
                    ?>
                    <div class="thirds__group thirds__group--<?php echo $i . $empty_class; ?>">
                        <?php $content_title = get_sub_field('content_title'); if($content_title) : ?>
                            <h2 class="content_title"><?php echo $content_title; ?></h2>
                        <?php endif; ?>
                        <?php the_sub_field('content_text'); ?>
                        <?php while(has_sub_field('add_cta_button')) : ?>
                            <p class="cta-button_wrap"><?php echo do_shortcode("[button url='$btn_link' name='$btn_words']"); ?></p>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : //if 4+ groups of content (slider) ?>
            <div class="thirds__slider-wrap">
                <div class="flexslider thirds__slider">
                    <ul class="slides">
                        <?php while(has_sub_field('content_block_content')) : ?>
                            <li class="thirds__slide-item">
                                <?php $content_title = get_sub_field('content_title'); if($content_title) : ?>
                                    <h2 class="content_title"><?php echo $content_title; ?></h2>
                                <?php endif; ?>
                                <?php the_sub_field('content_text'); ?>
                                 <?php while(has_sub_field('add_cta_button')) : ?>
                                    <div class="cta-button_wrap"><?php echo do_shortcode("[button url='$btn_link' name='$btn_words']"); ?></div>
                                <?php endwhile; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</article>