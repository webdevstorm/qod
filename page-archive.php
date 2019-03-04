<?php
/**
 * The template for displaying archive pages.
 * Template Name: Page-Archives
 * @package QOD_Starter_Theme
 */

get_header(); ?>
<section class="archive-stuff">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
<?php echo get_the_title( $post_title ); ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        <div class="categories">
<?php wp_list_categories(array());?>
</div>
<div class="tags">
            <h2>Tags<h2>
       <?php $tags=get_tags('post-tag');
       if ($tags): foreach ($tags as $tag): ?>
       <li><a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id));?>" title="<?php echo esc_attr($tag->name);?>">
       <?php echo esc_html($tag->name);?></a></li>
<?php endforeach; ?>
<?php endif;?>
</ul>
</div></section>
	


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
