<div class="container mx-auto">
    <h2 class="p-2">
        <span class="text-2xl uppercase font-bold" href="#"><?php echo get_theme_mod('elablee_first_section_category_title'); ?>
        </span>
    </h2>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 p-2">
            <?php
            $first_left_args = array(
                'posts_per_page' => 1,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'post_status'    => 'publish',
                'cat'            => get_theme_mod( 'elablee_first_section_posts' ),
            );
            // the query
            $first_left_post = new WP_Query( $first_left_args ); ?>
            <?php if ( $first_left_post->have_posts() ) : ?>
                <?php while ( $first_left_post->have_posts() ) : $first_left_post->the_post(); ?>
                        <div class="h-48 md:h-full w-full bg-cover bg-center rounded-lg"
                             style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-0 hover:bg-opacity-50 transition-all duration-500 ease-in-out rounded-lg">
                                <div class="text-center">
                                    <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">
                                        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="w-full md:w-1/2 p-2">
            <?php
            $firsst_right_args = array(
                'posts_per_page' => 4,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'post_status'    => 'publish',
                'cat'            => get_theme_mod( 'elablee_first_section_posts' ),
                'offset'         => 1
            );
            // the query
            $first_right = new WP_Query( $firsst_right_args ); ?>
            <?php if ( $first_right->have_posts() ) : ?>
                <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-2 ml-6">
                    <?php while ( $first_right->have_posts() ) : $first_right->the_post(); ?>
                        <div class="h-48 w-full bg-cover bg-center rounded-lg"
                             style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-0 hover:bg-opacity-50 transition-all duration-500 ease-in-out rounded-lg">
                                <a href="<?php the_permalink(); ?>" class="text-center">
                                    <h1 class="text-white font-serif font-semibold uppercase"><?php the_title() ?></h1>

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
</div>



