<div class="container mx-auto p-2">
    <h2 class="p-2">
        <span class="text-2xl uppercase font-bold" href="#"><?php echo get_theme_mod('elablee_third_section_category_title'); ?>
        </span>
    </h2>
    <div class="flex flex-wrap">
        <?php
        $fourth_args = array(
            'posts_per_page' => 4,
            'order'          => 'DESC',
            'orderby'        => 'date',
            'post_status'    => 'publish',
            'cat'            => get_theme_mod( 'elablee_fourth_section_posts' ),
        );
        // the query
        $fourth_posts = new WP_Query( $fourth_args ); ?>
        <?php if ( $fourth_posts->have_posts() ) : ?>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <?php while ( $fourth_posts->have_posts() ) : $fourth_posts->the_post(); ?>
                    <div class="bg-white shadow max-w-md mx-auto hover:bg-gray-200 hover:text-black text-gray-700">
                        <!-- section -->
                        <a href="<?php the_permalink(); ?>">
                            <img class="" src="<?php the_post_thumbnail_url(); ?>" />
                            <h3 class="text-lg font-bold p-2"><?php the_title(); ?></h3>
                            <p class="text-sm text-gray-600 px-4 pb-2"><?php the_date(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
</div>



