<?php
/**
 * Header file for the Gen2Voip WordPress Child theme.
 *      <?php the_custom_logo(); ?>
* https://www.usablewp.com/learn-wordpress/home-page/how-to-add-the-custom-logo-to-our-wordpress-website/
**/

$has_logo = has_custom_logo();
?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
		wp_body_open();
		?>
    <header role="banner" class="header">
        <h1 class="header__logo">
            <?php if($has_logo) {
                the_custom_logo();
            } else {
                bloginfo( 'name' );
            } ?>

        </h1>
        <!-- <nav class="header__navigation navbar"> -->
        <!-- <ul class="navbar__navlist">
                <li class="navbar__navitem">
                    <a href="" class="navbar__navlink">Home</a>
                </li>
                <li class="navbar__navitem">
                    <a href="" class="navbar__navlink">About</a>
                </li>
                <li class="navbar__navitem">
                    <a href="" class="navbar__navlink">Business Solutions</a>
                </li>
                <li class="navbar__navitem">
                    <a href="" class="navbar__navlink">Contact</a>
                </li>

            </ul> -->

        <?php if ( has_nav_menu( 'primary' ) ) { ?>
        <nav class="header__navigation navbar" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>"
            role="navigation">
            <ul class="navbar__navlist">
                <?php if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu(
                            array(
                            'container'  => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'primary',
                        )
                    );
                } ?></ul>
        </nav><!-- .primary-menu-wrapper -->
        <?php } ?>
        </div><!-- .header-navigation-wrapper -->

        <!-- </nav> -->
        <!-- <div class="header__contact">
            <h1 class="header__contact-call">call us today 972-946-4362</h1>
            <h1 class="header__contact-email">sales@gen2voip.com</h1>
        </div> -->
    </header>