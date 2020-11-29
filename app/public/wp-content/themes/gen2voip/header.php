<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
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
    <header id="site-header" class="header" role="banner">
        <h1 class="header__logo">
            <?php if(has_custom_logo()) {
                the_custom_logo();
            } else {?>
            <a href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
            <?php } ?>

        </h1>

        <button class="btn-menu-toggle toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
            data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
            <span class="menu-toggle-btn">&nbsp;</span>
        </button><!-- .nav-toggle -->

        <?php if ( has_nav_menu( 'primary' ) ) { ?>
        <nav class="header__navigation navbar" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>"
            role="navigation">
            <ul class="navbar__list">
                <?php if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu(
                        array(
                            'container'  => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'primary',
                        ));}?>
            </ul>
        </nav><!-- .primary-menu-wrapper -->
        <?php } ?>

        <div class="header__contact">
            <h1 class="header__contact-call">call us today 972-946-4362</h1>
            <h1 class="header__contact-email">sales@gen2voip.com</h1>
        </div>
    </header><!-- #site-header -->
    <?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );