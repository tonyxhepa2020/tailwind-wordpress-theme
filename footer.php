<footer>
    <!-- component -->
    <div class="bg-gray-800 text-white mt-2">
        <div class="max-w-6xl m-auto text-gray-200 flex flex-wrap justify-center">
            <div class="p-5 w-48 ">
                <ul>
                    <?php wp_list_categories( array(
                        'orderby'    => 'name',
                    ) ); ?>
                </ul>
            </div>
            <div class="p-5 w-48 ">
               <?php
               $tag_list = get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' );

               if ( $tag_list && ! is_wp_error( $tag_list ) ) {
                   echo $tag_list;
               }
               ?>
            </div>
            <div class="p-5 w-48 ">
                <?php

                if( get_theme_mod( 'elablee_footer_tos_page' ) ){
                    ?><a href="<?php the_permalink( get_theme_mod( 'elablee_footer_tos_page' ) ); ?>">Terms of Use</a><?php
                }

                ?>
                <?php

                if( get_theme_mod( 'elablee_footer_privacy_page' ) ){
                    ?><a href="<?php the_permalink( get_theme_mod( 'elablee_footer_privacy_page' ) ); ?>">Privacy Policy</a><?php
                }

                ?>
            </div>

            <div class="p-5 w-48 ">
                <div class="text-xs uppercase text-indigo-500 font-medium">Contact us</div>
                <a class="my-3 block" href="/#">XXX XXXX, Floor 4 San Francisco, CA <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">contact@company.com <span class="text-teal-600 text-xs p-1"></span></a>
            </div>
        </div>
    </div>

    <div class="bg-gray-900 pt-2 ">
        <div class="flex pb-5 px-3 m-auto pt-5 text-gray-200 text-sm flex-col
      md:flex-row max-w-6xl">
            <div class="mt-2">© <?php echo get_theme_mod( 'elablee_footer_copyright_text' ); ?>.</div>
            <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                <?php

                if( get_theme_mod( 'elablee_facebook_handle' ) ){
                    ?>
                    <a href="https://facebook.com/<?php echo get_theme_mod( 'elablee_facebook_handle' ); ?>" class="p-2 rounded bg-blue-700 mx-2">
                        Facebook
                    </a>
                    <?php
                }

                if( get_theme_mod( 'elablee_twitter_handle' ) ){
                    ?>
                    <a href="https://twitter.com/<?php echo get_theme_mod( 'elablee_twitter_handle' ); ?>" class="p-2 rounded bg-blue-700 mx-2">
                        Twitter
                    </a>
                    <?php
                }
                if( get_theme_mod( 'elablee_instagram_handle' ) ){
                    ?>
                    <a href="https://instagram.com/<?php echo get_theme_mod( 'elablee_instagram_handle' ); ?>" class="p-2 rounded bg-blue-700 mx-2">
                        Instagram
                    </a>
                    <?php
                }

                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
