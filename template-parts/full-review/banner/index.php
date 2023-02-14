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
<header class="f-r-banner">
    <div class="f-r-banner-wrapper">
        <div class="f-r-banner-logo-container">
            <a href="<?php echo $Link; ?>" target="_blank" rel="nofollow"><?php the_post_thumbnail( 'post-thumbnail', array( 'loading' => '' ) ); ?></a>
            <a href="<?php echo $Link;?>" class="button-3" target="_blank" rel="nofollow">Get Bonus</a>
        </div>
        <div class="f-r-banner-content-container">
        <div class="f-r-banner-content-title-features">
            <div class="f-r-banner-content-title-container">
                <h1><?php the_title(); ?><img class="plus-18" alt="18 pluss" src="https://www.kongebonus.com/wp-content/uploads/2022/09/18plus-64x64-1.webp"/></h1>
                <div class="f-r-banner-content-title-rating-container">
                    <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $Starsimg; ?>-stars.svg" alt="<?php echo $Stars; ?> Stars" title="<?php echo $Stars; ?> Stars" width="175" height="30"> <span class="rating"><?php echo $Stars; ?>/5.0</span>
                </div>
            </div>
            <div id="review-top-right-over-second">
                <div class="casino-features-review">
                    <?php
                    foreach ($features as $feature) {
                        $feature = $feature['feat'];
                        ?>
                        <div class="feature-review"><img src="<?php bloginfo('template_url'); ?>/images/checkmark.svg" alt="Trekk" width="15" height="24"><?php echo $feature; ?></div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php if(  $Specialpromo ){ ?>
        <span class="special-promo-review"><?php echo $Specialpromo; ?></span>
        <?php } ?>
            <?php if(  $Specialpromo2 ){ ?>
        <span class="special-promo-review-2"><?php echo $Specialpromo2; ?></span>
        <?php } ?>
        <?php
        get_template_part( 'template-parts/affiliate-list/tags/tags' );
        ?>
        <div id="review-top-right-under" class="bonus-features">
            <?php if ( in_category('9') ) { ?>
            <div class="freespins-info">
                <img src="<?php get_template_directory_uri(); ?>/wp-content/uploads/2022/07/icon-klient.png" alt="Klient" width="30" height="30">
                <span class="offer-title">Klient</span>
                <span class="offer-description">100</span>
            </div>
            <?php 
            } 
            else {
                ?>
                <div class="freespins-info">
                    <img src="<?php bloginfo('template_url'); ?>/images/Freespins.webp" alt="Frees pins" width="30" height="30">
                    <span class="offer-title"><?php echo $BonusFeatureTitle1; ?></span>
                    <span class="offer-description"><?php echo $BonusFeature1;?></span>
                </div>
                <?php
            }
            ?>
            <div class="freespins-info">
                <img src="<?php bloginfo('template_url'); ?>/images/wager.webp" alt="Wager" width="30" height="30">
                <span class="offer-title"><?php echo $BonusFeatureTitle2; ?></span>
                <span class="offer-description"><?php echo $BonusFeature2;?></span>
            </div>
            <div class="freespins-info">
                <img src="<?php bloginfo('template_url'); ?>/images/Prosent.webp" alt="Prosent" width="30" height="30">
                <span class="offer-title"><?php echo $BonusFeatureTitle3; ?></span>
                <span class="offer-description"><?php echo $BonusFeature3;?></span>
            </div>
            <div class="freespins-info">
                <img src="<?php bloginfo('template_url'); ?>/images/Opptil.webp" alt="Opptil" width="30" height="30">
                <span class="offer-title"><?php echo $BonusFeatureTitle4; ?></span>
                <span class="offer-description"><?php echo $BonusFeature4;?></span>
            </div>
        </div>
        </div>
    </div>
</header>