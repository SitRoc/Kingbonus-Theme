<div class="banner-container">
    <div class="banner-wrapper">
        <nav>
            <h4><?php the_field('menu_title'); ?></h4>
            <?php
            require_once(get_template_directory().'/extended-classes/SidebarTop.php');
            wp_nav_menu( array(
                'theme_location' => 'sidebar-top-menu',
                'walker'         => new SidebarTopMenu()
            ) );
            ?>
            <?php 
            $show_giveaway = get_field('show_giveaway');
            if( $show_giveaway ){ ?>
            <a href="/giveaway/" class="button-1"><?php echo $Giveaway;?></a>
            <?php } ?>
        </nav>
        <div class="hero-slider">
            <div class="slideshow-container">
                <?php
                // Get repeater acf field  
                $rows = get_field('banners');
                // Check if there are more than 4 rows
                //print_r($rows);
                $rowkeys = [];
                if( count($rows) > 4 ){
                    // Get random 4 rows
                    $rowkeys = array_rand($rows, 4);
                } else {
                    // Set rowkeys to be all rows
                    $rowkeys = array_keys($rows);
                }
                //print_r($rows);
                // for each loop through rows
                foreach( $rowkeys as $row ){
                    $row = $rows[$row];
                    // Get the image
                    $image = $row['b_background_image'];
                    // Get the title
                    $title = $row['b_title'];
                    // Get the link
                    $link = $row['b_link'];
                    // Get the description
                    $description = $row['b_description'];
                    // Get the button text
                    $button_text = $row['b_button_title'];
                    ?>
                    <div class="slides slide-fade" style="--image-url: url('<?php echo $image; ?>');">
                        <div class="slide-text slideInUp">
                            <div class="slide-title"><?php echo $title;?></div>
                            <div class="slide-description"><?php echo $description;?></div>
                            <a href="<?php echo $link;?>" class="button-2" rel="nofollow" target="_blank"><?php echo $button_text;?></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="slide-arrows">
                  <a href="#" class="arrow-prev" id="arrow-prev"></a>
                  <a href="#" class="arrow-next" id="arrow-next"></a>
               </div>
            </div>
        </div>
    </div>
</div>