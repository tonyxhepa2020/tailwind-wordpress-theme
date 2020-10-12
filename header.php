<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <!-- Stylesheets
	============================================= -->
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body <?php body_class('bg-gray-100'); ?>>
<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-teal-900 mb-3">
    <div x-data="{ open: false }" class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
            <a class="font-bold font-mono leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white" href="/">
                indigo Color
            </a>
            <button @click="open = true" class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                <span class="block relative w-6 h-px rounded-sm bg-white"></span>
                <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center hidden lg:block" id="example-navbar-warning">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location'        =>  'primary',
                    'menu_id'               =>  'elablee_primary',
                    'container'             =>  '',
                    'fallback_cb'           =>  false,
                    'depth'                 =>  1,
                    'menu_class'            => 'flex flex-col lg:flex-row list-none ml-auto',
                    'walker'                =>  new Elablee_Custom_Nav_Walker()
                ]);
            }
            ?>
            <?php
            if (get_theme_mod('elablee_header_show_search')) {
                ?>
                <!-- Top Search
                    ============================================= -->
                <div class="relative flex w-full sm:w-7/12 md:w-5/12 px-4 flex-wrap items-stretch lg:ml-auto">
                    <form class="w-full" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                    <input
                            type="text"
                            name="s"
                            value="<?php the_search_query(); ?>"
                            class="px-2 py-1 h-10 border border-solid  border-indigo-600 rounded-full text-sm leading-snug text-indigo-700 bg-indigo-100 shadow-none outline-none focus:outline-none w-full font-normal flex-1 border-l-0 placeholder-indigo-300"
                            placeholder="Search" />
                    </form>
                </div>
              <!-- #top-search end -->
                <?php
            }
            ?>

        </div>
        <div x-show="open"
             @click.away="open = false"
             class="lg:flex flex-grow items-center" id="example-navbar-warning">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location'        =>  'primary',
                    'menu_id'               =>  'elablee_primary',
                    'container'             =>  '',
                    'fallback_cb'           =>  false,
                    'depth'                 =>  1,
                    'menu_class'            => 'flex flex-col lg:flex-row list-none ml-auto',
                    'walker'                =>  new Elablee_Custom_Nav_Walker()
                ]);
            }
            ?>
            <div class="relative flex w-full sm:w-7/12 md:w-5/12 px-4 flex-wrap items-stretch lg:ml-auto">
                <?php
                if (get_theme_mod('elablee_header_show_search')) {
                    ?>
                    <!-- Top Search
                        ============================================= -->
                    <div class="relative flex w-full sm:w-7/12 md:w-5/12 px-4 flex-wrap items-stretch lg:ml-auto">
                        <form class="w-full" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <input
                                    type="text"
                                    name="s"
                                    value="<?php the_search_query(); ?>"
                                    class="px-2 py-1 h-10 border border-solid  border-indigo-600 rounded-full text-sm leading-snug text-indigo-700 bg-indigo-100 shadow-none outline-none focus:outline-none w-full font-normal flex-1 border-l-0 placeholder-indigo-300"
                                    placeholder="Search" />
                        </form>
                    </div>
                    <!-- #top-search end -->
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>




