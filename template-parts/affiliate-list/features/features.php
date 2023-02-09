<?php
$casino_bonus_features = get_field('casino_bonus_features');
$casino_features = get_field('casino_feats');

$features = $casino_features;
$bonusFeatures = $casino_bonus_features;
$type = $args['list_category'];
if($type == 'sportsbook'){
    $bonusFeatures = get_field('sportsbook_bonus');
    $features = get_field('sportsbook_features');
}

$table_columns = $args['table_columns'];

$BonusFeatureTitle1 = $table_columns[0]['column_title'];
$BonusFeature1 = ($bonusFeatures['feat1']) ? $bonusFeatures['feat1'] : 'test';
$BonusFeatureTitle2 = $table_columns[1]['column_title'];
$BonusFeature2 = ($bonusFeatures['feat2']) ? $bonusFeatures['feat2'] : 'test';
$BonusFeatureTitle3 = $table_columns[2]['column_title'];
$BonusFeature3 = ($bonusFeatures['feat3']) ? $bonusFeatures['feat3'] : 'test';
$BonusFeatureTitle4 = $table_columns[3]['column_title'];
$BonusFeature4 = ($bonusFeatures['feat4']) ? $bonusFeatures['feat4'] : 'test';


?>

<td class="vanish-mobile ninth info prosent expand sp-bet">
    <h4 style="--field-title: '<?php echo $BonusFeatureTitle1; ?>';"><?php echo $BonusFeature1;?></h4>
    <div class="feature"><img src="<?php bloginfo('template_url'); ?>/images/checkmark.svg" alt="Feature" width="15px" height="24px">
    <?php echo $features[0]['feat']; ?>
    </div>
</td>
<td class="vanish-mobile ninth info opptil expand sp-bet">
    <h4 style="--field-title: '<?php echo $BonusFeatureTitle2; ?>';"><?php echo $BonusFeature2;?></h4>
    <div class="feature"><img src="<?php bloginfo('template_url'); ?>/images/checkmark.svg" alt="Feature" width="15px" height="24px"><?php echo $features[1]['feat']; ?></div>
</td>
<td class="vanish-mobile ninth info freespins expand sp-bet">
    <h4 style="--field-title: '<?php echo $BonusFeatureTitle3; ?>';"><?php echo $BonusFeature3;?></h4>
    <div class="feature"><img src="<?php bloginfo('template_url'); ?>/images/checkmark.svg" alt="Feature" width="15px" height="24px"><?php echo $features[2]['feat']; ?></div>
</td>
<td class="vanish-mobile ninth info wager expand sp-bet">
    <h4 style="--field-title: '<?php echo $BonusFeatureTitle4; ?>';"><?php echo $BonusFeature4;?></h4>
    <div class="feature"><img src="<?php bloginfo('template_url'); ?>/images/checkmark.svg" alt="Feature" width="15px" height="24px"><?php echo $features[3]['feat']; ?></div>
</td>