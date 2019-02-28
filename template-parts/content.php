<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header id="new-quote" class="entry-content">

	<span><i class="fa-quote-left"></i></span><br>
		<?php the_excerpt(); ?>
</header><!-- .entry-content -->
	<div id="author" class="author">

	<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?> -->
	</div>
</article><!-- #post-## -->
