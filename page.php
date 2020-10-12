<?php get_header(); ?>

    <!-- Content
    ============================================= -->
    <section id="mainContent" class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full md:w-8/12">
                <!-- Post Content
                ============================================= -->
                <div class="p-2 bg-white mt-2 rounded-lg">
                    <?php
                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();

                            global $post;
                            $author_ID          =   $post->post_author;
                            $author_URL         =   get_author_posts_url( $author_ID );
                            $categories             =   get_the_category();
                            ?>
                            <div class="flex p-2">
                                <div class="flex ml-2 text-sm">
                                    <a class="font-bold text-teal-500 hover:text-teal-700 mr-2 pr-2 border-r-2 border-teal-500" href="/">Home</a>
                                    <?php
                                    if ($categories){
                                        $cat = get_category($categories[0]);
                                        ?>
                                        <a class="font-bold text-teal-500 hover:text-teal-700" href="<?php echo get_category_link($cat) ?>">
                                            <?php echo $cat->name ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Entry Title
                           ============================================= -->
                            <h1 class="font-bold text-left text-2xl px-4"><?php the_title(); ?></h1>
                            <!-- .entry-title end -->
                            <div class="px-4">
                                <!-- Single Post
                                ============================================= -->
                                <!-- Entry Meta
                                ============================================= -->
                                <div class="flex p-2 mb-2">
                                    <span class="text-gray-600"><?php echo get_the_date(); ?></span>
                                </div>
                                <!-- .entry-meta end -->
                                <!-- Entry Image
                                ============================================= -->
                                <?php

                                if( has_post_thumbnail() ){
                                    ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="w-full" width="100%">
                                    </a>
                                    <?php
                                }

                                ?>
                                <!-- .entry-image end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="text-black py-3">
                                    <?php
                                    the_content();
                                    ?>
                                </div>
                                <!-- Post Single - Content End -->
                                <!-- Tag Cloud
                                ============================================= -->
                                <div class="p-2 m-2 font-bold text-teal-500">
                                    <?php the_tags( '', ' | ' ); ?>
                                </div>
                                <!-- .tagcloud end -->
                                <div class="clear"></div>
                            </div>
                            <!-- .entry end -->

                            <?php
                        }
                    }
                    ?>
                </div>
                <!-- Post Navigation
                ============================================= -->
                <?php if(is_single()) : ?>
                    <div class="flex justify-center p-2 bg-teal-900 rounded-lg my-2">
                        <div class="p-2 text-white uppercase font-bold hover:text-teal-400"><?php previous_post_link( '%link', 'Previous'); ?></div>
                        <div class="p-2 text-white uppercase font-bold hover:text-teal-400"><?php next_post_link( '%link', 'Next' ); ?></div>
                    </div>
                <?php endif; ?>
                <!-- .post-navigation end -->
                <div class="w-full p-2 bg-teal-600">
                    <h2 class="flex p-2 text-xl Font-bold">Similar Post You May Like </h2>
                    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-4 ml-4">
                        <?php
                        $single_args = [
                            'posts_per_page'    =>  4,
                            'post__not_in'      =>  [ $post->ID ],
                            'cat'               =>  !empty($categories) ?  $categories[0]->term_id : null
                        ];
                        $rp_query               =   new WP_Query($single_args);

                        if( $rp_query->have_posts() ){
                            while( $rp_query->have_posts() ){
                                $rp_query->the_post();

                                ?>
                                <div class="w-full hover:bg-gray-200 hover:text-blue-500 transition-all duration-500 ease-in-out">
                                    <a class="" href="<?php the_permalink(); ?>">
                                        <img class="w-full h-auto"
                                             src="<?php the_post_thumbnail_url(); ?>" alt="avatar"/>
                                    </a>
                                    <div class="p-2 flex justify-around">
                                        <a href="<?php the_permalink(); ?>" class="flex ml-3">
                                            <h3 class="text-md font-medium"><?php echo max_title_length( get_the_title(), 55 ); ?></h3>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }

                            wp_reset_postdata();
                        }

                        ?>
                    </div>
                </div>
                <!-- .postcontent end -->
            </div>
            <div class="w-full md:w-4/12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- #content end -->

<?php get_footer(); ?>