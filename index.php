<?php get_header(); ?>
<div class="page-container">
   <?php
      // Show featured image if it exists
      if (has_post_thumbnail()) {
            ?>
            <section class="featured-image">
            <?php
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
            ?>
            <img src="<?php echo $thumbnail['0']; ?>" />
            </section>    
      <?php }
   ?>
   <div class="page-wrapper">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part( 'template-parts/common/content-full-width' ); ?>
   </div>
</div>
<?php get_footer(); ?>