<?php /* Template Name: Films */ 
    get_header(); 
?>
	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

        <?php
            $args = array( 'post_type' => 'films');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="row">
        	<div class="col-md-12">
        		<a href="<?php echo get_permalink($loop->post);?>"><h3 class="block-title"><?php the_title();?></h3></a>
        		<div class="entry-content description">
        			<?php the_content();?>
        		</div>
        		<small>
					<div class="row">
            			<div class="col-md-6">
            				<b>Country:</b> <?php echo GetMetaData($loop->post->ID, 'country');?>
            			</div>
            			<div class="col-md-6">
            				<b>Genre:</b> <?php echo GetMetaData($loop->post->ID, 'genre');?>
            			</div>
        			</div>
        			<div class="row">
            			<div class="col-md-6">
            				<b>Ticket Price:</b> <?php echo get_post_meta( $loop->post->ID, 'strTicketPrice', true);?>
            			</div>
            			<div class="col-md-6">
            				<b>Release Date:</b> <?php echo get_post_meta( $loop->post->ID, 'strReleaseDate', true);?>
            			</div>
        			</div>       			
        		</small>
        	</div>
        </div>
        <hr>
        <?php 
            endwhile;
        ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>