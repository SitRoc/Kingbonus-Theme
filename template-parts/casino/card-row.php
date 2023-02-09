<?php
$mainArgs = $args['args'];
$totalNumber = $args['total'];
$excludePosts = $args['exclude'];
if($args['argsOrdered']){
   $argsOrdered = $args['argsOrdered'];
   $orderedPosts = new WP_Query( $argsOrdered );
   $orderedPosts = $orderedPosts->posts;
}

$result = new WP_Query( $mainArgs );

$posts = [];
$counter = 0;


if($args['argsOrdered']){
   $mainPosts = $result->posts;
   $y = 0;
   $z = 0;
   for ($x = 0; $x <= $totalNumber-1; $x++) {
      if($excludePosts[$x] && $excludePosts[$x] != 0){
         array_push($posts, $orderedPosts[$z]);
         $z++;
      }else{
         array_push($posts, $mainPosts[$y]);
         $y++;
      }
   }
}
?>
<section class="casino-list-horizontal">
    <?php 
    if($posts){
      foreach( $posts as $post):
         setup_postdata($post);
         get_template_part( 'template-parts/casino/item-card' );
      endforeach;
      wp_reset_postdata();
    }else{
      while ($result->have_posts()) : $result->the_post();
         get_template_part( 'template-parts/casino/item-card' );
      endwhile;
      wp_reset_postdata(); 
    }
    ?>
</section>