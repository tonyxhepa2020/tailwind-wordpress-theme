<div class="container mx-auto">
    <h2 class="p-2">
        <span class="text-2xl uppercase font-bold" href="#"><?php echo get_theme_mod('elablee_second_section_category_title'); ?>
        </span>
    </h2>
    <div class="flex flex-wrap">
            <?php
            $second_right_args = array(
                'posts_per_page' => 6,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'post_status'    => 'publish',
                'cat'            => get_theme_mod( 'elablee_second_section_posts' ),
            );
            // the query
            $second_right_posts = new WP_Query( $second_right_args ); ?>
            <?php if ( $second_right_posts->have_posts() ) : ?>
                <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-3 ml-4">
                    <?php while ( $second_right_posts->have_posts() ) : $second_right_posts->the_post(); ?>
                       <div class="w-full hover:bg-gray-200 hover:text-blue-500 transition-all duration-500 ease-in-out">
                        <a class="" href="<?php the_permalink(); ?>">
                            <img class="w-full h-56"
                                 src="<?php the_post_thumbnail_url(); ?>" alt="avatar"/>
                        </a>
                            <div class="p-2 flex justify-around">
                                <a href="<?php the_permalink(); ?>" class="flex ml-3">
                                    <h3 class="text-md font-medium"><?php echo max_title_length( get_the_title(), 55 ); ?></h3>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
    </div>
</div>



