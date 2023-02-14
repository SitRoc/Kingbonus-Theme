<footer>
   <?php
   $footerClass="";
   if( get_field('footer_dark_text', 'option') ){
       $footerClass="dark-text";
   }
   ?>
   <div class="footer-columns <?php echo $footerClass; ?>">
      <!-- <div class="footer-column">
         <h5>Ultima publicación</h5>
         <ul>
            <?php //$recent = new WP_Query("showposts=5"); while($recent->have_posts()) : $recent->the_post();?>
            <li><a href="<?php //the_permalink() ?>" title="<?php //the_title(); ?>"><?php //if (strlen($post->post_title) > 35) {
               //echo substr(the_title($before = '', $after = '', FALSE), 0, 37) . '...'; } else {
               
               //the_title();
               
               //} ?></a></li>
            <?php //endwhile; ?>
         </ul>
      </div> -->
      <div class="footer-column">
         <?php the_field('footer_content', 'option'); ?>
      </div>
      <div class="footer-column">
        
		  		
        
         <img src="<?php bloginfo('template_url'); ?>/images/18pluss.webp" alt="18 pluss" title="18 pluss" width="75" height="78">
      </div>
   </div>
   <div id="footer-bottom">
      <p><?php the_field('disclaimer', 'option'); ?></p>
   </div>
</footer>
<?php include(TEMPLATEPATH."/scripts.php");?>
</body>
<?php wp_footer(); ?>
</html>