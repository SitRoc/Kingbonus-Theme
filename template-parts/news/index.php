<div class="page-wrapper news-item-page">
    <div class="page-content">
        <div class="page-content-inner">
            <h1><?php the_title(); ?> News Item</h1>
            <?php while (have_posts()) : the_post();
                the_content('');
                endwhile; ?>
        </div>
    </div>
</div>