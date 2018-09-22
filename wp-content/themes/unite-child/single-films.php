<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite
 */

$strGenre = GetMetaData($post->ID, 'genre');
$strCountries = GetMetaData($post->ID, 'country');
get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
			
			<div class="row">
    			<div class="col-md-6">
    				<b>Country:</b> <?php echo $strCountries;?>
    			</div>
    			<div class="col-md-6">
    				<b>Genre:</b> <?php echo $strGenre;?>
    			</div>
			</div>
			
			<div class="row">
    			<div class="col-md-6">
    				<b>Ticket Price:</b> <?php echo get_post_meta( get_the_ID(), 'strTicketPrice', true);?>
    			</div>
    			<div class="col-md-6">
    				<b>Release Date:</b> <?php echo get_post_meta( get_the_ID(), 'strReleaseDate', true);?>
    			</div>
			</div>

			<?php unite_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>