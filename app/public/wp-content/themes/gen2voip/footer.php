<?php
/**
 * Footer file for the Gen2Voip WordPress Child theme.
 */

$has_partners_logos = is_active_sidebar( 'partner_logos' );

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

    <section class="footer__partners">
        <h1>Trusted Parnters</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam recusandae? Rem ea non labore,
            culpa ipsa et eum perspiciatis maiores, reprehenderit quibusdam pariatur. Corrupti eius iste atque labore.
        </p>
        <div class="footer__partners-logos">
            <?php if ( $has_partners_logos ) { 
                 dynamic_sidebar( 'partner_logos' );
            } ?>
        </div>
    </section>

    <div class="section-inner">
        <a class="to-the-top" href="#site-header">
            <span class="to-the-top-long">
                <?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
            </span><!-- .to-the-top-long -->
            <span class="to-the-top-short">
                <?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
            </span><!-- .to-the-top-short -->
        </a><!-- .to-the-top -->

    </div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>
</body>

</html>