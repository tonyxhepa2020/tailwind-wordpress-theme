<?php

$archive_args = array(
    'posts_per_page' => 9,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'post_status' => 'publish',
    'post_type'   => 'post'
);
// the query
$archive_query = new WP_Query( $archive_args ); ?>

<?php if ( $archive_query->have_posts() ) : ?>
    <!-- component -->
    <div class="container my-6 mx-auto px-4 bg-gray-800 rounded-lg pb-2">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- the loop -->
            <?php while ( $archive_query->have_posts() ) : $archive_query->the_post(); ?>
                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/3 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a href="<?php the_permalink(); ?>">
                            <img alt="Placeholder" class="block h-auto w-full" src="<?php the_post_thumbnail_url(); ?>">
                        </a>
                        <header class="flex items-center bg-gray-900 justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline font-bold hover:text-indigo-200 text-indigo-500" href="<?php the_permalink(); ?>">
                                    <?php echo max_title_length( get_the_title(), 55 ); ?>
                                </a>
                            </h1>
                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->
            <?php endwhile; ?>
            <!-- end of the loop -->
        </div>
        <div class="flex justify-center p-2 bg-gray-900 rounded-lg">
            <div class="p-2 text-white uppercase font-bold"><?php previous_posts_link( 'Previous' ); ?></div>
            <div class="p-2 text-white uppercase font-bold"><?php next_posts_link( 'Next' ); ?></div>
        </div>
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>