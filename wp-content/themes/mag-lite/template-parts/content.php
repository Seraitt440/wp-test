<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mag_Lite
 */

?>	
<?php //global $mag_lite_post_count; 
$archive_layout = mag_lite_get_option( 'archive_layout' );
$design_class = '';
$post_class = ''; 
$image_size = 'mag-lite-archive';
if( 'first-design' == $archive_layout):
	$design_class = 'post flexible-post'; 
	$image_size = 'mag-lite-home-tab';
endif;?>	
<?php 
	$image_class= '';
	if( !has_post_thumbnail() ){
		$image_class= 'no-image';
	} 
?>		        			
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="<?php echo esc_attr( $design_class);?> <?php echo esc_attr( $image_class);?> <?php echo esc_attr( $post_class);?>">

		<?php if( has_post_thumbnail() ): ?>
			<figure class="featured-image">
				<?php the_post_thumbnail( $image_size ); ?>
			</figure>
		<?php endif;?>

		<div class="post-content">
			<header class="entry-header">

				<?php mag_lite_entry_categories();?>

				<h3 class="entry-title">
					<a href="<?php the_permalink()?>"><?php the_title();?></a>
				</h3>

			</header>

			<div class="entry-content">
	            <?php
	                $excerpt = mag_lite_the_excerpt(20);
	                echo wp_kses_post( wpautop( $excerpt ) );
	            ?>
			</div>

			<?php mag_lite_posted_on(); ?>

		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
