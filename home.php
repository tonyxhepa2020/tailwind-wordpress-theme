<?php get_header(); ?>

    <!-- Content
    ============================================= -->
    <section id="mainContent" class="min-h-screen">
        <div class="flex p-2 bg-teal-700 mt-4">
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_first_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/home', 'first-section') ?>
                <?php
            }
            ?>
        </div>
        <div class="flex p-2 mt-4">
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_second_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/home', 'second-section') ?>
                <?php
            }
            ?>
        </div>
        <div class="flex p-2 mt-4">
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_third_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/home', 'third-section') ?>
                <?php
            }
            ?>
        </div>
        <div class="flex p-2 mb-6">
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_fourth_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/home', 'fourth-section') ?>
                <?php
            }
            ?>
        </div>
    </section><!-- #content end -->

<?php get_footer(); ?>