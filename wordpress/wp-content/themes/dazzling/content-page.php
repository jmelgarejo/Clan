<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content col-md-10 p-0 m-0">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
				'after'  => '</div>',
			) );
		?>
            <?php
            // Checks if this is homepage to enable homepage widgets
            if ( is_front_page() ) :
              get_sidebar( 'home' );
            endif;
          ?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
