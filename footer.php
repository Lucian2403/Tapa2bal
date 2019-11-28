<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tapa2bal
 */

?>
<footer id="colophon" class="site-footer">
	<section class="site-info">
        <div class="site-info__sitemap">
            <h2 class="site-info__sitemap__text">
		        <?php the_field('sitemap_text','option'); ?>
            </h2>
<!--            Footer menu-->
            <div class="site-footer__sitemap__menu">
		        <?php
		        wp_nav_menu( array(
			        'theme_location' => 'menu-1',
			        'menu_id'        => 'primary-menu',
		        ) );
		        ?>
            </div>
        </div>


<!--        Footer Logo-->
		<?php $footerLogo = get_field('logo_image', 'option'); ?>
        <img src="<?php echo $footerLogo['url']?>" alt="Tapa2bal Logo" class="site-footer__logo">

<!--        Address info-->
        <div class="site-info__address">
            <h2 class="site-info__address__text">
	            <?php the_field('address_text','option'); ?>
            </h2>
			<div class="site-info__address__info">
                <?php the_field('address_info', 'option'); ?>
            </div>
        </div>
    </section>



    <section class="footer_info">
        <a href="<?php the_field('terms_condition_url', 'option'); ?>" class="terms" target="_blank">
            <h3 class="terms__text"><?php the_field('terms_condition', 'option'); ?></h3>
        </a>

        <a href="<?php the_field('politique_de_confidentialité_url', 'option'); ?>" class="politique" target="_blank">
            <h3 class="politique__text"><?php the_field('politique_de_confidentialité', 'option'); ?></h3>
        </a>

        <h3 class="year"><?php the_field('year', 'option'); ?></h3>
    </section>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
