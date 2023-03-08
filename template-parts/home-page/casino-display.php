<div class="casino-list-container">
    <div class="casino-display-wrapper">
        <nav>
            <!-- Slot Item -->
            <section class="game-of-the-week">

            </section>
            <!-- Menu Title -->
            <h4><?php the_field('secondary_menu_title'); ?></h4>
            <!-- Menu Items -->
            <?php
            require_once(get_template_directory().'/extended-classes/SidebarBottom.php');
            wp_nav_menu( array(
                'theme_location' => 'sidebar-bottom-menu',
                'walker'         => new SidebarBottomMenu()
            ) );
            ?>
        </nav>
        <div class="casino-list">
            <!-- Expandable Intro -->
            <h1><?php the_field('list_title'); ?></h1>
            <div class="js-expand-container">
                <span class="tagline js-expand-section" id="main-tagline">
                    <?php the_field('list_description'); ?>
                </span>
                <div class="center-content">
                    <a 
                        class="js-expand-trigger" 
                        href="javascript:;" id="mt-button" 
                        primary_text="<?php the_field('list_expand_label'); ?>"
                        alt_text="<?php the_field('list_contract_label'); ?>">
                        <?php the_field('list_expand_label'); ?>
                    </a>
                </div>
            </div>
            <!-- Casino List -->
            
            <!-- CTA to Full List -->
            <div class="center-button">
                <a href="/casas-de-apuestas/" class="button-1">See all casinos here</a>
            </div>
        </div>
    </div>
</div>