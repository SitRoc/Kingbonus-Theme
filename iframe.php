<?php /* Template Name: iFrame Page Template */ ?>
<?php get_header(); ?>
    <iframe src="<?php the_field('iframe_url'); ?>" allowtransperancy="true" class="full-page-iframe" scrolling="no"></iframe>
<?php get_footer(); ?>