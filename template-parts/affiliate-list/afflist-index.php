<section class="affiliate-list" id="casinoliste-list-section">
    <div class="container">
        <?php
        $argsForList = $args;
        $list_config = $args['list_config'];
        $list_category = $list_config['list_category'];

        if( get_field('listing_filter') == 'filter' ){
        ?>
        <div class="filtering">
            <p>Sorter etter:</p>
            <div id="current-casinolist-selection" class="default"></div>
            <ul id="casinoliste-tabs">
                <li ><button id="rank" class="focus" href="#" type="button">Topp vurdering</button></li>
                <li><button id="newlyadded" href="#" type="button">Nylig lagt til</button></li>
                <li><button id="crypto" href="#" type="button">Crypto</button></li>
                <li><button id="exclusive" type="button">Eksklusive Bonuser</button></li>
            </ul>
        </div>
        <?php
        }
        ?>
        <?php

        // Get Category from List Config
        $table_columns = get_field('table_columns', $list_category->taxonomy . '_' . $list_category->term_id);
        //print_r($table_columns);
        $argsForList['table_columns'] = $table_columns;

        // Get Rows for that List Config



        $args['posts_per_page'] = '20';
        $args['meta_key'] = 'stars';
        $args['orderby'] = 'meta_value_num';
        $args['cat'] = $list_category->term_id;
            $args['meta_query'] = [
            'relation' => 'AND',
            'stars' => array('key' => 'Stars', 'compare' => 'EXISTS'),
        ];
        $args['orderby'] = ['stars' => 'DESC', 'post_date' => 'DESC' ];
        $result = new WP_Query( $args );
        ?>
        <table id="toplist-boxes-new">
            <thead class="toplist-box-new">
                <tr class="main">
                    <th class="vanish-mobile ninth">
                    </th>
                    <th class="title vanish-mobile twoninth">
                    Casino
                    </th>
                    <?php
                    foreach ($table_columns as $value) {
                        ?>
                        <th class="vanish-mobile center ninth">
                            <?php echo $value['column_title']; ?>
                        </th>
                        <?php
                    }
                    ?>
                    <th class="vanish-mobile twoninth">
                    Link
                    </th>
                </tr>
            </thead>
            <tbody class="toplist-box-new">
            <?php 
            while ($result->have_posts()) : $result->the_post();
                get_template_part( 'template-parts/casino/item-row-new', '', $argsForList );
            endwhile;
            wp_reset_postdata(); 
            ?>
            </tbody>
        </table>
        <div class="toplist-loading" id="toplist-loading">
            <div class="inner">
                <img src="<?php bloginfo('template_url'); ?>/images/loading.svg" alt="loading" height="150" width="150">
                <p>Loading More</p>
            </div>
        </div>
    </div>
</section>