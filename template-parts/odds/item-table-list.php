<?php 
$result = get_field('od_result');
$date = get_field('od_datetime');
$now = date("Y-m-d H:i:s", strtotime('+1 hours'));
$casino = get_field('od_casino');
$tags = [];
$casino_link = get_field('c_link', $casino->ID);
$sport_tags = get_the_terms( $post, 'sports_type' );
$other_tags = get_the_terms( $post, 'post_tag' );

$logo = "";

foreach ($sport_tags as $value) {
	array_push($tags, $value->name);
	$logo = get_field('icon', $value);
	if(empty($logo)){
		//echo $value->parent;
		$parent = get_term($value->parent, 'sports_type');
		$logo = get_field('icon', $parent);
	}
}

if($casino){
	array_push($tags, $casino->post_title);
}

foreach ($other_tags as $value) {
	if (!in_array($value->name, $tags)){
		array_push($tags, $value->name);
	}
}

$active = "active";
$todayClass = "";
if($date){
	if(strtotime($now) > strtotime($date)){
		$active = "inactive";
	}
	$date = DateTime::createFromFormat('Y-m-d H:i:s', $date);
	$now = DateTime::createFromFormat('Y-m-d H:i:s', $now);
	$savedDay = $date->format('Y-m-d');
	$nowDay = $now->format('Y-m-d');
	if ($savedDay == $nowDay){
		$todayClass = "today";
	}
}

$resultClass = "";
if($result == 'Void'){
	$resultClass = "void";
	$todayClass = "";
}
if($result == 'Profit'){
	$resultClass = "won";
	$todayClass = "";
}
if($result == 'Loss'){
	$resultClass = "lost";
	$todayClass = "";
}
if($result == 'Half Win (AH)'){
	$resultClass = "half-win";
	$todayClass = "";
}
if($result == 'Half Loss (AH)'){
	$resultClass = "half-loss";
	$todayClass = "";
}
if($result == 'Draw (AH)'){
	$resultClass = "draw";
	$todayClass = "";
}

?>
<li class="<?php echo $active; ?> <?php echo $resultClass; ?> <?php echo $todayClass; ?>"> <!-- inactive/active | today/lost/void -->
    <div class="time">
		<img loading="lazy" width="40" src="<?php echo $logo; ?>" alt="">
		<?php
		$casino = get_field('od_casino');
		?>
        <span>
			<?php
			if($date){
				echo $date->format('d M');
			}
			?>
		</span>
		<?php
		if($date){
			echo $date->format('H:i');
		}
		?>
    </div>
    <div class="event">
        <div class="name">
			<?php print the_title(); ?>
        </div>
        <div class="tags">
			<?php
			
			foreach ($tags as $value) {
				?><span><?php echo $value; ?></span><?php
			}
			?>
        </div>
    </div>
    <div class="bet">
        <?php the_field('od_predicted_outcome'); ?>
    </div>
    <div class="odd">
        <span>
        <?php the_field('od_odds'); ?>
        </span>
        <div class="units">
			<?php 
			$units = get_field('od_units');
			if($units != null){
				for ($i = 0; $i < 10; $i++) {
					if($units > $i){
						?><span class="active"></span><?php
					}else{
						?><span></span><?php
					}
				} 
			}
			?>
            <div>
                bet size
            </div>
        </div>
    </div>
    <div class="odd-cta"><a href="<?php echo $casino_link; ?>" class="button" target="_blank" rel="nofollow">
        	Spill her
        </a>
    </div>
</li>