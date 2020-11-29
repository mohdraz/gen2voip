<?php
/**
 * Displays the menu icon and modal
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<div class="menu-modal cover-modal mobile-menu-modal" data-modal-target-string=".menu-modal">
    <section class="mobile-menu-modal__header">
        <h1 class="header__logo">
            <a href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
        </h1>
        <button data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false"
            data-set-focus=".menu-modal">
            <span class="menu-toggle-btn">&nbsp;</span>
        </button><!-- .nav-toggle -->
    </section>
    <section class="mobile-menu-modal__menu">
        <?php
				$mobile_menu_location = '';

				// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
				if ( has_nav_menu( 'mobile' ) ) {
					$mobile_menu_location = 'mobile';
				} elseif ( has_nav_menu( 'primary' ) ) {
					$mobile_menu_location = 'primary';
				} 


					?>

        <nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'twentytwenty' ); ?>" role="navigation">

            <ul class="modal-menu reset-list-style">

                <?php
						if ( $mobile_menu_location ) {

							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => $mobile_menu_location,
								)
							);

						} else {

							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_toggles'       => true,
									'title_li'           => false,
									'walker'             => new TwentyTwenty_Walker_Page(),
								)
							);

						}
						?>

            </ul>

        </nav>
    </section><!-- .menu-top -->

</div><!-- .menu-wrapper -->

</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->