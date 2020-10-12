<?php
$s=get_search_query();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$search_args = array(
    's' => $s,
    'posts_per_page' => 9,
    'paged' => $paged
);
// the query
$search_results = new WP_Query( $search_args ); ?>

<?php if ( $search_results->have_posts() ) : ?>
    <!-- component -->
    <div class="container mx-auto bg-white rounded-lg pb-2">
        <div class="flex p-2 text-indigo-300 uppercase font-bold m-2 bg-teal-200">
            <?php _e( 'Search Results for:', 'elablee' ); ?>
            <span class="ml-3 text-indigo-500"><?php the_search_query(); ?></span>
        </div>
        <div class="grid gap-8 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
            <!-- the loop -->
            <?php while ( $search_results->have_posts() ) : $search_results->the_post(); ?>
                <div class="w-full hover:bg-gray-200 hover:text-blue-500 transition-all duration-500 ease-in-out">
                    <a class="" href="<?php the_permalink(); ?>">
                        <img class="w-full h-48"
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
        <div class="flex justify-center p-2 bg-teal-900 rounded-lg my-2">
            <div class="p-2 text-white uppercase font-bold"><?php previous_posts_link( 'Previous' ); ?></div>
            <div class="p-2 text-white uppercase font-bold"><?php next_posts_link( 'Next' ); ?></div>
        </div>
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>