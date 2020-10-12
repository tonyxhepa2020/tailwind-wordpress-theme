<?php get_header(); ?>

    <!-- Content
    ============================================= -->
    <section id="mainContent" class="min-h-screen">
        <div class="container mx-auto">
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_first_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/first', 'section') ?>
                <?php
            }
            ?>
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_second_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/second', 'section') ?>
                <?php
            }
            ?>
            <?php
            if( !is_single() && is_home() && get_theme_mod( 'elablee_show_third_section_posts' ) ){
                ?>
                <?php get_template_part('template-parts/third', 'section') ?>
                <?php
            }
            ?>
        </div>
    </section><!-- #content end -->

<?php get_footer(); ?>