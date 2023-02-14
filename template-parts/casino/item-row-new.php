<?php 
$Stars = get_post_meta($post->ID, 'stars', true);
$Starsimg = str_replace(array('.'), '', $Stars);
$Link = get_field('al_link');

$list_config = $args['list_config'];
//print_r($list_config);
?>

<tr class="table-row">
    <td class="vanish-mobile ninth">  
        <a href="<?php echo $Link; ?>" title="Go to <?php the_title(); ?>" target="_blank" rel="nofollow">
            <?php the_post_thumbnail( 'homepage-post-thumbnail' ); ?>
        </a>
    </td>
    <td class="title vanish-mobile twoninth expand">
        <h3>
            <?php 
            if($list_config['link_title']){
                ?>
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
                <?php
            }else{
                the_title();
            }
            ?>
        </h3>
        <img class="casino-rating" src="<?php bloginfo('template_url'); ?>/images/<?php echo $Starsimg; ?>-stars.svg" alt="<?php echo $Stars; ?> Stars" title="<?php echo $Stars; ?> Stars" width="85px" height="15px"></h3>
        <?php 
        if($list_config['show_tags']){
            get_template_part( 'template-parts/affiliate-list/tags/tags' );
        }
        ?>
        
    </td>
    <?php
    $argsForFeatures['list_category'] = $list_config['list_category']->slug;
    $argsForFeatures['table_columns'] = $args['table_columns'];
    //print_r($args['table_columns']);
    get_template_part( 'template-parts/affiliate-list/features/features', '', $argsForFeatures );
    
    ?>
    <td class="vanish-mobile twoninth button">
        <a href="<?php echo $Link; ?>" title="Get Bonus from <?php the_title(); ?>" target="_blank" class="button-3" rel="nofollow">Get Bonus</a>
        <?php
        if($list_config['show_more_button']){
            ?>
            <a href="<?php the_permalink() ?>" title="Read more on <?php the_title(); ?>" class="button-4">Les mer</a>
            <?php
        }
        ?>
    </td>
</tr>