<?php 
/* Template name: Galeria */
	get_header();?>
	<section class="main_galery_section">
		<div class="top_img_main_gallery"></div>
		<div class="main_galery_container">
			<section class="photo_galery">	
				<div class="photo_container">
					<div class="row">
		<?php 
			if(have_posts()) : 
			while (have_posts()) : the_post();
				the_content();
			endwhile;
			endif;
		?>
					</div>
				</div>
			</section>
		</div>
	</section>
	<?php get_footer();
?>