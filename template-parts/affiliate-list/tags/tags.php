<div class="tags">
<?php
    if( get_field('no_sticky') ){
        ?> <span class="tag">No sticky</span> <?php
    }
    if( get_field('crypto') ){
        ?> <span class="tag">Crypto</span> <?php
    }
    if( get_field('exclusive_bonus') ){
        ?> <span class="tag">Exclusive Bonus</span> <?php
    }
    if( get_field('odds') ){
        ?> <span class="tag">Odds</span> <?php
    }
    if( get_field('new_casino') ){
        ?> <span class="tag">New Casino <?php echo date("Y"); ?></span> <?php
    }
    if( get_field('recommended') ){
        ?> <span class="tag">Recommended</span> <?php
    }
?>
</div>