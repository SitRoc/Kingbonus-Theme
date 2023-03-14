<?php /* Template Name: Home Page*/ ?>
<?php get_header(); ?>

<div id="site-wrapper">
    <section class="home-casino-container">
        <?php get_template_part('template-parts/home-page/banner'); ?>
        <?php get_template_part('template-parts/home-page/casino-display'); ?>
    </section>
    <section class="page-wrapper dark page-wrapper-home">
        <?php get_template_part( 'template-parts/common/content-full-width' ); ?>
    </section>
</div>

<?php get_footer(); ?>