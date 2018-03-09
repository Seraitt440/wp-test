<?php
/**
 * Template part for displaying Single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mag_Lite
 */

?>		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if( has_post_thumbnail() ): ?>
			<figure class="featured-image">
				<?php the_post_thumbnail(); ?>
			</figure>
		<?php endif;?>

		<div class="post-content">
			<header class="entry-header">

				<?php mag_lite_entry_categories();?>

				<h3 class="entry-title">
					<?php the_title();?>
				</h3>

			</header>

			<div class="entry-content">
	           <?php the_content();?>
			</div>

			<?php mag_lite_posted_on(); ?>

		</div>	
</article><!-- #post-<?php the_ID(); ?> -->