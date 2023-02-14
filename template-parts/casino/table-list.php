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
<table id="toplist-boxes-new" class="slim">
    <thead class="toplist-box-new">
                  <tr class="main">
                     <th class="vanish-mobile ninth">
                     </th>
                     <th class="title vanish-mobile twoninth">
                        Casino
                     </th>
                     <th class="vanish-mobile center ninth">
                        Prosent
                     </th>
                     <th class="vanish-mobile center ninth">
                        OPPTIL
                     </th>
                     <th class="vanish-mobile center ninth">
                        FREESPINS
                     </th>
                     <th class="vanish-mobile center ninth">
                        WAGER
                     </th>
                     <th class="vanish-mobile twoninth">
                        Lenke
                     </th>
                  </tr>
               </thead>
	<tbody class="toplist-box-new">
    <?php 
    if($posts){
      foreach( $posts as $post):
         setup_postdata($post);
         get_template_part( 'template-parts/casino/item-row-slim' );
      endforeach;
      wp_reset_postdata();
    }else{
      while ($result->have_posts()) : $result->the_post();
         get_template_part( 'template-parts/casino/item-row-slim' );
      endwhile;
      wp_reset_postdata(); 
    }
    ?>		
	</tbody>
</table>