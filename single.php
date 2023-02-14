<?php get_header(); ?>
<div id="site-wrapper">
    <?php
    // Get post categories
    $id = get_the_ID();
    $category = get_innermost_category($id);
    // Get custom field 'template' of $category
    $template = get_field('template', $category);

    // Switch statement to load template, there are 3 templates
    switch ($template) {
        case 1:
            // News Template
            get_template_part('template-parts/content');
            break;
        case 2:
            // Full Review Template
            get_template_part('template-parts/full-review/index');
            break;
        case 3:
            // Review Template
            get_template_part('template-parts/content');
            break;
        default:
            get_template_part('template-parts/content');
            break;
    }

    ?>
</div>
<?php get_footer(); ?>