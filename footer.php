<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package Cryout Creations
 * @subpackage tempera
 * @since tempera 0.5
 */
?>	<div style="clear:both;"></div>
	</div>

	<footer id="footer" role="contentinfo">
		<div id="colophon">
			<?php get_sidebar( 'footer' );?>
			<?php tempera_footer_socials(); ?>
			<?php utec_footer_extras(); ?>
			<?php tempera_copyright(); ?>
		</div>
	</footer>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>