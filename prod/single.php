<?php 
	get_header();?>

	<?php 

		if( have_posts() ) :
			while ( have_posts() ) : the_post();?>
				<section class="main_section">
		<div class="top_img_single">
			<?php the_post_thumbnail( $size, array('class' => 'post_bcg_img') ); ?>
		</div>
		<div class="main_container">
		<section class="s_center">
			<div class="row">
				<div class="container">
					<h2 class="container_header">
						<?php the_title(); ?>
					</h2>
					<div class="post_content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="back">
			<div class="row">
				<div class="container">
					<a href="<?php bloginfo('url');?>" class="back_btn">Powrót</a>
				</div>
			</div>
		</section>
	</div>
	</section>
			<?php endwhile;
		endif;

	
	 get_footer();
?>