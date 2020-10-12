<?php
$this_tag = get_query_var('tag');
$tag_args = array(
    'posts_per_page' => 9,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'post_status' => 'publish',
    'post_type'   => 'post',
    'tag'         => $this_tag


);
// the query
$tag_query = new WP_Query( $tag_args ); ?>

<?php if ( $tag_query->have_posts() ) : ?>
    <!-- component -->
    <section id="category" class="my-2 p-2 bg-teal-400 rounded-lg font-bold text-black uppercase">
        <a href="/" class="hover:text-blue-400">Home</a>  / <span class="text-teal-900"><?php echo $this_tag ?></span>
    </section>
    <div class="grid gap-8 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
            <!-- the loop -->
            <?php while ( $tag_query->have_posts() ) : $tag_query->the_post(); ?>
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
        <div class="flex justify-center p-2 bg-gray-900 rounded-lg my-2">
            <div class="p-2 text-white uppercase font-bold"><?php previous_posts_link( 'Previous' ); ?></div>
            <div class="p-2 text-white uppercase font-bold"><?php next_posts_link( 'Next' ); ?></div>
        </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>