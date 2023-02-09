<?php
if( have_rows('top_banner_field') ):

    // Loop through rows.
    while ( have_rows('top_banner_field') ) : the_row();
        $class="";
        if( get_sub_field('light_text_colors') ){
            $class="light-text";
        }
        $headerClass='slim';
        if(get_sub_field('background_image')){
            $headerClass='';
        }
?>
<header class="banner-background <?php echo $headerClass; ?>" id="casinoliste-top" class="casino" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="banner-inner">
        <div class="banner-content <?php echo $class; ?>">
            <h1><?php the_title(); ?></h1>
            <p><span class="ingress"><?php the_sub_field('description');?></span></p>
        </div>
    </div>
</header>
<?php

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;