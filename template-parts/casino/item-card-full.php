<?php 
$Stars = get_post_meta($post->ID, 'stars', true);
$Starsimg = str_replace(array('.'), '', $Stars);
$Link = get_field('al_link');

$category = get_innermost_category($post->ID);
// $list_config = get_field('listing_configuration', $category);
// $list_category = $list_config['list_category'];
//print($category);
$table_columns = get_field('table_columns', $category->taxonomy . '_' . $category->term_id);

$casino_features = get_field('casino_feats');
$casino_bonus_features = get_field('casino_bonus_features');

$features = $casino_features;
$bonusFeatures = $casino_bonus_features;

$BonusFeatureTitle1 = $table_columns[0]['column_title'];
$BonusFeature1 = ($bonusFeatures['feat1']) ? $bonusFeatures['feat1'] : 'test';
$BonusFeatureTitle2 = $table_columns[1]['column_title'];
$BonusFeature2 = ($bonusFeatures['feat2']) ? $bonusFeatures['feat2'] : 'test';
$BonusFeatureTitle3 = $table_columns[2]['column_title'];
$BonusFeature3 = ($bonusFeatures['feat3']) ? $bonusFeatures['feat3'] : 'test';
$BonusFeatureTitle4 = $table_columns[3]['column_title'];
$BonusFeature4 = ($bonusFeatures['feat4']) ? $bonusFeatures['feat4'] : 'test';

//print_r($list_config);
?>
<div class="card-full">
    <div class="card-container">
        <div class="card-header">
            <a href="<?php echo $Link; ?>" target="_blank" rel="nofollow"><?php the_post_thumbnail( 'post-thumbnail', array( 'loading' => '' ) ); ?></a>
            <div class="card-header-details">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $Starsimg; ?>-stars.svg" alt="<?php echo $Stars; ?> Stars" title="<?php echo $Stars; ?> Stars" width="85" height="15">
            </div>
        </div>
        <div class="card-tags">
        <?php
        get_template_part( 'template-parts/affiliate-list/tags/tags' );
        ?>
        </div>
        <div class="card-features">
            <?php
            foreach ($features as $feature) {
                $feature = $feature['feat'];
                ?>
                <div class="feature-review"><img src="<?php bloginfo('template_url'); ?>/images/checkmark.svg" alt="Trekk" width="15" height="24"><?php echo $feature; ?></div>
                <?php
            }
            ?>
        </div>
        <div class="card-offer-info">
            <div class="card-offer">
                <span class="offer-title"><?php echo $BonusFeatureTitle1; ?></span>
                <span class="offer-description"><?php echo $BonusFeature1;?></span>
            </div>
            <div class="card-offer">
                <span class="offer-title"><?php echo $BonusFeatureTitle2; ?></span>
                <span class="offer-description"><?php echo $BonusFeature2;?></span>
            </div>
            <div class="card-offer">
                <span class="offer-title"><?php echo $BonusFeatureTitle3; ?></span>
                <span class="offer-description"><?php echo $BonusFeature3;?></span>
            </div>
            <div class="card-offer">
                <span class="offer-title"><?php echo $BonusFeatureTitle4; ?></span>
                <span class="offer-description"><?php echo $BonusFeature4;?></span>
            </div>
        </div>
        <div class="card-button">
            <a href="<?php echo $Link; ?>" title="Hent bonus fra <?php the_title(); ?>" target="_blank" class="button-3" rel="nofollow">Hent Bonus</a>
        </div>
        <div class="card-additional-details">
            
        </div>
    </div>
</div>