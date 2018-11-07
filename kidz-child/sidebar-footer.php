<div class="row footer-sidebar">
	<div class="col-md-3 col-sm-6 col-xs-6 first widget">
		<?php if ( ideapark_mod( 'footer_contacts' ) ) { ?>
				<?php echo make_clickable( str_replace( ']]>', ']]&gt;', ideapark_mod( 'footer_contacts' ) ) ); ?>
		<?php } ?>
	</div>
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( ideapark_mod( 'footer_sidebar' ) ? ideapark_mod( 'footer_sidebar' ) : 'footer-sidebar' ) ) {} ?>
</div>
