<?php get_header(); ?>
<?php

if( !is_single() && is_date() ){
    ?>
    <main class="min-h-screen">
        <section id="page-title" class="container mx-auto">
            <?php get_template_part('template-parts/date', 'section') ?>
        </section>
    </main>
    <?php
}
?>
<?php get_footer(); ?>