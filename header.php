<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alfie' ); ?></a>

        <header class=" bg-gray-800 dark:bg-gray-900">
            <!-- Navigation -->

            <?php if (has_nav_menu('primary')) : ?>

            <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
                <div class="flex gap-1 cursor-pointer mb-2 md:mb-0">
                    <img src=" <?php bloginfo('template_directory');?>/images/pawprint.png" alt="Logo" class="w-10">
                    <div class="flex items-center flex-shrink-0 text-white mr-6">
                        <span class="font-bold text-3xl md:text-4xl">Alfie Pet Supplies</span>
                    </div>
                </div>
                <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto">
                    <div class="text-xl text-white sm:flex-grow md:text-xl md:pt-2">

                        <?php

                        // Primary navigation menu.
                        wp_nav_menu(array(
                            'menu_class' => 'nav-menu',
                            'container' => false,
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul>%3$s</ul>',
                        ));
                        ?>

                    </div>
                </div>
    </div>
    </nav><!-- .main-navigation -->

    <?php endif; ?>

    </header>