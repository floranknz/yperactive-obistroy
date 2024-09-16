<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('', true,''); ?></title>
    <?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/boxicons.min.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <header class="fixed w-full text-pure-white body-1 z-50 transition duration-300 max-md:border-b border-soft-white-100/30">
        <div class="main-nav relative h-96 md:container max-md:mx-24 nav flex justify-start md:justify-center items-center lg:border-b border-soft-white-100/30">
            <div class="navbar flex gap-48 items-center">
            <?php
                // Function to split the menu items and display them
                function display_custom_menu() {
                    // Fetch the menu items for the primary menu
                    $menu_locations = get_nav_menu_locations();
                    $menu_id = $menu_locations['primary'];
                    $menu = wp_get_nav_menu_items($menu_id);

                    if ($menu) {
                        $menu_count = count($menu);
                        $half = ceil($menu_count / 2);

                        // Split the menu into two halves
                        $left_menu = array_slice($menu, 0, $half);
                        $right_menu = array_slice($menu, $half);

                        // Display left menu items
                        echo '<ul class="menu-left hidden md:flex gap-48">';
                        foreach ($left_menu as $item) {
                            echo '<li class="menu-item"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                        ?>

                        <div class="logo w-120 h-80 md:w-128 md:h-80 flex items-center justify-center md:-mt-4">
                            <?php if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else { ?>
                                <a href="<?= get_site_url() ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/img/obistroy-white.svg" alt="<?php bloginfo('name'); ?>" /></a>
                            <?php } ?>
                        </div>

                        <?php
                        // Display right menu items
                        echo '<ul class="menu-right hidden md:flex gap-48">';
                        foreach ($right_menu as $item) {
                            echo '<li class="menu-item"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                    }
                }

                // Call the function to display the custom menu
                display_custom_menu();

            ?>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => '',
                    'items_wrap' => '<ul class="navbar-menu-mobile hidden">%3$s</ul>',
                ) );
            ?>
            </div>
                <div class="rs flex gap-8 mt-4 absolute right-0">
                    <a href="https://www.instagram.com/o_bistroy/" target="_blank"><i class="bx bx-sm bxl-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61559738912098" target="_blank"><i class="bx bx-sm bxl-facebook-square"></i></a>
                </div>
                <div class="mobile-menu absolute right-48 md:hidden flex items-center justify-center h-40 w-40 border border-soft-white-100/25 rounded cursor-pointer"><i class="bx bx-sm bx-menu-alt-right"></i></div>
            </div>
        </div>
    </header>