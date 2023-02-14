<section class="full-review-content">
    <div class="frc-container">
        <div class="frc-c-main">
            <div class="details">
                <?php
                // Loop through a repeater field called details
                if( have_rows('details') ):
                    while ( have_rows('details') ) : the_row();
                        $title = get_sub_field('detail_group_title');
                        ?>
                        <div class="bonus-element">
                            <div class="step-title"> <?php echo $title; ?>: </div>
                            <?php
                            // Loop through a repeater sub field called detail_tags
                            if( have_rows('detail_tags') ):
                                while ( have_rows('detail_tags') ) : the_row();
                                    $detail = get_sub_field('detail');
                                    ?>
                                    <span class="step-detail"><?php echo $detail; ?></span>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <?php
            get_template_part( 'template-parts/common/content-w-faq' );
            ?>
        </div>
        <div class="frc-c-sidebar">
            <h2 class="similar">Vi anbefaler også</h2>
            <div class="frcc-sidebar-card-container">
            <?php
                $id = get_the_ID();
                $args['posts_per_page'] = '4';
                $args['orderby'] = 'rand';
                $args['cat'] = '3';
                $args['post__not_in'] = array( $id, );
                $args['meta_query'] = [['key' => 'Stars', 'value' => '4.6', 'compare' => '>=', 'type' => 'DECIMAL(10,3)']];
                $result = new WP_Query( $args );
                //shuffle($result);
                ?>
                <?php 
                while ($result->have_posts()) : $result->the_post();
                get_template_part( 'template-parts/casino/sidebar-card' );
                endwhile;
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="bottom-bar-inner">
        <a href="<?php echo $Link;?>" class="button-3" target="_blank" rel="nofollow">Get Bonus</a>
        </div>
    </div>
</section>