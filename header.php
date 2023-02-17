<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <title><?php wp_title( '|', true, 'right' ); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <style><?php include(TEMPLATEPATH."/fonts.php");?></style>
      <?php if ( is_page( '958' ) ) { ?>	   
      <script src="https://exchange.cdnedge.bluemix.net/web/appear2meeV2_2.js" async></script>
      <script>
         window.Appear2meeLayer = window.Appear2meeLayer || [];
         function  appear2mee() { Appear2meeLayer.push(arguments);}
         
         appear2mee("initWithID","459b9a26-37e6-40e9-b327-e08c5ded2a2f566542b5-3a87-45ab-b59d-c2937ac1e306"); // REPLACE KEY WITH YOUR WEB KEY
         appear2mee("setPlayerCSS",".play-button-2mee.show,.offer-button-2mee.show {border-radius: 22px;background-color: #009A44;color: #fff;border: 2px solid #009A44;}");
         
      </script>  
      <?php } ?>
	  <?php include(TEMPLATEPATH."/jsonld.php");?>
      <?php wp_head(); ?><?php $isofeaturedimage = get_the_post_thumbnail_url(null, 'full'); ?>
	  <meta name="twitter:image" content="<?php echo $isofeaturedimage; ?>"><meta name="twitter:image:src" content="<?php echo $isofeaturedimage; ?>">

   </head>
   <?php $colors = get_field('colours', 'option'); ?>
   <style>
      :root{
         --color-primary:                    <?php echo $colors['primary']; ?>;
         --color-primary-dark:		         <?php echo $colors['primary_dark']; ?>;
         --color-background-grey:            <?php echo $colors['secondary_background']; ?>;
         --color-background-highlight:       <?php echo $colors['accent_tertiary']; ?>;

         --color-text:                       <?php echo $colors['light_text']; ?>;
         --color-text-secondary:             <?php echo $colors['light_text_secondary']; ?>;

         --color-dark-text:                  <?php echo $colors['dark_text']; ?>;
         --color-dark-text-secondary:        <?php echo $colors['dark_text_secondary']; ?>;

         --color-accent-primary:             <?php echo $colors['accent']; ?>;
         --color-accent-secondary:           <?php echo $colors['accent_secondary']; ?>;
         --color-shadow-primary:             <?php echo $colors['accent_tertiary']; ?>;

         --color-accent-secondary:           <?php echo $colors['accent_tertiary']; ?>;
      }
   </style>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YLE6Q4Z2HF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YLE6Q4Z2HF');
</script>
   <body <?php body_class( $args['is_dark'] ); ?>>
      <?php wp_body_open(); ?>
	   <?php 
      $GiveawayActive = get_post_meta($post->ID, 'Giveaway', true); 
	  if($GiveawayActive){
         $GiveawayActive = "true";
      }
      ?>
      <div class="giveaway" id="giveaway-status" active="<?php echo $GiveawayActive;?>" style="display:none;"></div>
      <nav id="main-nav">
         <div id="menu-container">
            <div id="logo">
				   <a class="mobile-logo" href="<?php bloginfo('url'); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Kingbonus Logo" title="Kingbonus" width="331" height="43"></a>
            </div>
            <div id="menu-right">
               <?php
                  wp_nav_menu( array(
                  'theme_location' => 'main-menu',
                  'menu-container' => 'ul',
                  'menu_id' => 'main-menu',
                  'container' => false,
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',) );
                  // if ($menu){
                  //    echo $menu;
                  // }
               ?>
               <?php 
                  // wp_nav_menu( array(
                  //    'theme_location' => 'search-menu',
                  //    'menu-container' => 'ul',
                  //    'menu_id' => 'search-menu',
                  //    'container' => false,
                  //    'items_wrap' => '<ul id="%1$s">%3$s</ul>',) ); 	
               ?>
               <?php 
                  // wp_nav_menu( array(
                  // 'theme_location' => 'main-menu',
                  // 'menu-container' => 'ul',
                  // 'menu_id' => 'mobile-menu',
                  // 'container' => false,
                  // 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',) ); 
                  ?> 
               <?php 
               // If main-menu exists and has items, then show the mobile menu icon
               if ( has_nav_menu( 'main-menu' ) ) {
                  $menu_items = wp_get_nav_menu_items('main-menu');
                  if (!empty($menu_items)) { ?>
                  <a href="#" id="pull-menu" class="nav-mobile"><img src="<?php bloginfo('template_url'); ?>/images/menu.svg" width="36" height="36" alt="Menu Nav Icon"></a>
               <?php } } ?>
            </div>
         </div>
      </nav>