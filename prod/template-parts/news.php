<div class="news_box">
	<div class="news_box_img">
		<?php the_post_thumbnail();?>
	</div>
	<h1 class="news_box_title">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
	<div class="news_box_content">
		<p>
			<?php the_content( 'Czytaj więcej');?>
		</p>
	</div>
</div>