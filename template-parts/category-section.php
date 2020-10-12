<?php
$thisCat = get_category(get_query_var('cat'),false);
$category_args = array(
    'posts_per_page' => 9,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'post_status' => 'publish',
    'post_type'   => 'post',
    'cat'         => $thisCat->term_id

);
// the query
$category_query = new WP_Query( $category_args ); ?>
<?php if ( $category_query->have_posts() ) : ?>
   <section class="p-2">
       <h1 class="text-center text-xl font-bold text-teal-700"><?php echo $thisCat->name; ?></h1>
   </section>
    <div class="grid gap-8 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 ml-4">
        <!-- the loop -->
        <?php while ( $category_query->have_posts() ) : $category_query->the_post(); ?>
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
    <div class="flex justify-center p-2 bg-teal-900 rounded-lg my-2">
        <div class="p-2 text-white uppercase font-bold"><?php previous_posts_link( 'Previous' ); ?></div>
        <div class="p-2 text-white uppercase font-bold"><?php next_posts_link( 'Next' ); ?></div>
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>