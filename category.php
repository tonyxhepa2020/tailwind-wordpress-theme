<?php get_header(); ?>
<?php

if( !is_single() && is_category() ){
    ?>
    <main class="min-h-screen">
        <section id="page-title" class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full md:w-8/12">
                    <?php get_template_part('template-parts/category', 'section') ?>
                </div>
                <div class="w-full md:w-4/12">
                    <?php get_sidebar(); ?>
                </div>
            </div>

        </section>
    </main>
    <?php
}
?>
<?php get_footer(); ?>