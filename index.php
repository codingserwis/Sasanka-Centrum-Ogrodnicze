<?php get_header(); ?>
<section class="my_slider">
	<?php echo do_shortcode("[metaslider id=47]"); ?>
</section>
<section class="news">
	<div class="row">
		<!-- Start the loop for news -->
			<?php
 
  			if(get_query_var('paged')) { $paged = get_query_var('paged'); } 
  			elseif (get_query_var('page')) { $paged = get_query_var('page'); }
  			else { $paged = 1; }
  			$query_args = array(
    								'post_type' => 'post',
    								'posts_per_page' => 3,
    								'paged' => $paged,
    								'page' =>$paged
  								);
  
  			$the_query = new WP_Query( $query_args );

 			if ( $the_query->have_posts() ) : 
 				while ( $the_query->have_posts() ) : 
 					$the_query->the_post();
						get_template_part('template-parts/news');		
				endwhile; ?>
				</div>
					<div class="row">
					  <div class="main_pagination">
					  	<nav>
					  <?php 
					  	$pagination_args = array(
					  			'mid_size' => 2,
					  			'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
					  			'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>'
					  		);
					  	echo paginate_links($pagination_args); ?>
					  	</nav>
					  </div>
					</div>
				<?php wp_reset_postdata();
						endif; ?>
	
</section>
<section class="gardens">
	<div class="row">
		<div class="foto_panel_gardens"></div>
		<div class="text_panel_pink to_left">
			<h1>Ogrody tworzone z pasją</h1>
			<p>
				Już od ponad 20 lat łączymy pasję z wiedzą i doświadczeniem, projektując, tworząc i pielegnując ogrody naszych klientów.
			</p>
			<div class="row">
				<div class="link_panel">
					<a href="<?php bloginfo('wpurl');?>/galeria" class="white_border_button">Realizacje</a>
					<a href="<?php bloginfo('url');?>/kontakt" class="white_border_button">Kontakt</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="shoping">
	<div class="row">
		<div class="foto_panel_shopping"></div>
		<div class="text_panel_green to_right">
			<h1>Centrum ogrodnicze</h1>
			<p>
				Centrum ogrodnicze Sasanka oferuje swoim klientom szeroką gamę produktów niezbędnych do pielęgnacji i upiększania ogrodu. Służymy fachowym doradztwem przy wyborze roślin, nawozów, środków ochrony roślin i sprzętu ogrodniczego.
			</p>
			<div class="row">
				<div class="link_panel">
					<a href="<?php bloginfo('url');?>/centrum-ogrodnicze/" class="white_border_button_center">Nasza oferta</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="servis">
	<div class="row">
		<div class="foto_panel_servis"></div>
		<div class="text_panel_pink to_left">
			<h1>Pielęgnacja ogrodów</h1>
			<p>
				Świadczymy usługi w zakresie pielęgnacji ogrodów. Naszą ofertę kierujemy zarówno do osób prywatnych jak i firm, hoteli oraz zarządców i właścicieli obiektów.
			</p>
			<div class="row">
				<div class="link_panel">
					<a href="<?php bloginfo('url');?>/ogrody/" class="white_border_button">Nasza oferta</a>
					<a href="<?php bloginfo('url');?>/kontakt/" class="white_border_button">Kontakt</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact">
	<div class="row">
		<div class="map_panel">
			<?php echo do_shortcode('[wpgmza id="1"]'); ?>
		</div>
		<div class="text_panel_green adress_desc to_right">
			<h1 class="adress_heading">Centrum Ogrodnicze Sasanka</h1>
			<address class="main_adress">
				<div class="row">
					<div class="adress_info">
						Kurpiowska (boczna Hallera)<br/>
						45-819 Opole
					</div>
				</div>
				<div class="row">
					<div class="adress_info">
						<ul>
							<li>Sklep: <a href="tel:+48775472400">77 547 24 00</a></li>
							<li>Sklep: <a href="tel:+48603443522">603 443 522</a></li>
							<li>Serwis: <a href="tel:+48601533825">601 533 825</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="adress_info">
						<a href="mailto:sasankaogrody@wp.pl">sasankaogrody@wp.pl</a>
					</div>
				</div>
				<div class="row">
					<div class="adress_info">
						<ul>
							<li>Pon. - Pt.: 9:00 - 18:00</li>
							<li>Sobota: 10:00 - 14:00</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="social">
						<a href="https://www.facebook.com/Centrum-Ogrodnicze-Sasanka-509559705729173/?fref=ts"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
					</div>
				</div>
			</address>
		</div>
	</div>
	<?php get_footer();?>