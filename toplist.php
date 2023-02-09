<?php /* Template Name: Casino List*/ ?>
<?php $is_dark = ''; 
   if(get_field('dark_backdrop')){
      $is_dark = 'dark';
   }
   $args['is_dark'] = $is_dark;
   $list_config = get_field('listing_configuration');
   $argsForList['list_config'] = $list_config;
?>
<?php get_header( '', $args ); ?>
<?php $Description= get_post_meta($post->ID, 'Description', true); ?>
<div id="site-wrapper">
   <div id="main-area-casinoliste">
      <div id="casinoliste-inner">
         Testing
         <?php  
         //echo $is_dark;
         if( get_field('top_banner_switch') ){
            get_template_part( 'template-parts/banners/banner-background-image' );
         }else{
            ?>
            <h1><?php the_title(); ?></h1>
            <?php
         }
         ?>
         <?php
            get_template_part( 'template-parts/affiliate-list/afflist-index' , '', $argsForList);
         ?>
         <div class="home-content-container">
         <?php
            get_template_part( 'template-parts/common/content-w-faq' );
         ?>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>