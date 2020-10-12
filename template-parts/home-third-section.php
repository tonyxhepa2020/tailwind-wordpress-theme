<div class="container mx-auto">
    <h2 class="p-2">
        <span class="text-2xl uppercase font-bold" href="#"><?php echo get_theme_mod('elablee_third_section_category_title'); ?>
        </span>
    </h2>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2">
            <?php
            $third_left_args = array(
                'posts_per_page' => 1,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'post_status'    => 'publish',
                'cat'            => get_theme_mod( 'elablee_third_section_posts' ),
            );
            // the query
            $third_left_post = new WP_Query( $third_left_args ); ?>
            <?php if ( $third_left_post->have_posts() ) : ?>
                <?php while ( $third_left_post->have_posts() ) : $third_left_post->the_post(); ?>
                    <div class="w-full h-full bg-white rounded-lg">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="rounded-md rounded-b-none object-cover w-full h-64">
                        <span class="flex text-green-700 text-sm hidden md:block py-3 px-2">
                          <?php
                          $id = get_the_ID();
                          $cats = get_the_category($id);
                          foreach ( $cats as $cat ):
                              ?>
                              <a class="p-1 rounded bg-teal-500 hover:bg-teal-300 mr-2 font-semibold text-white" href="<?php echo get_category_link($cat->cat_ID); ?>">
                                  <?php echo $cat->name ?>
                              </a>
                          <?php endforeach; ?>
                        </span>
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="text-gray-800 hover:text-teal-700 text-2xl font-bold mb-2 leading-tight px-2">
                                <?php the_title(); ?>
                            </h2>
                        </a>

                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="w-full md:w-1/2">
            <?php
            $third_right_args = array(
                'posts_per_page' => 6,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'post_status'    => 'publish',
                'cat'            => get_theme_mod( 'elablee_third_section_posts' ),
                'offset'         => 1
            );
            // the query
            $third_right_posts = new WP_Query( $third_right_args ); ?>
            <?php if ( $third_right_posts->have_posts() ) : ?>
                <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-2 ml-4">
                    <?php while ( $third_right_posts->have_posts() ) : $third_right_posts->the_post(); ?>
                        <div class="max-w-xs w-full flex md:justify-self-center p-2 bg-white hover:bg-teal-200 rounded-lg transition duration-500 ease-in-out">
                            <div class="w-1/3">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="w-full w-32 h-24 object-cover object-center mx-auto rounded-lg"
                                         src="<?php the_post_thumbnail_url(); ?>" alt="avatar"/>
                                </a>
                            </div>
                            <div class="w-2/3">
                                <a href="<?php the_permalink(); ?>" class="flex ml-3">
                                    <h3 class="text-md font-medium text-gray-700"><?php echo max_title_length( get_the_title(), 55 ); ?></h3>
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
