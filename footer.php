</section>
		<footer class="footer">
				<div class="row">
					<?php
				wp_nav_menu(array(
					'menu' => 'footer_menu',
					'theme_location' => 'footer_menu',
					'menu_id' => 'footer_menu',
					'container' => 'div',
					'container_class' => 'footer_nav',
					));
			?>
				</div>
				<div class="row">
					<div class="footer_info">
						<p>
							Copyrights: Sasanka <?php the_time('Y'); ?> Wszelkie prawa zastrzeżone. 
						</p>
						<p>
							Projekt i wykonanie: <a href=<?php echo esc_url( 'http://codingserwis.pl/?utm_source=sasanka_page&utm_medium=footer_link&utm_campaign=client_page_link' ); ?>>codingserwis.pl</a>
						</p>
					</div>
				</div>
				<?php wp_footer();?>
		</footer>
		<div class="social__block">
			<div class="social__block-fb">
				<a href="https://www.facebook.com/Centrum-Ogrodnicze-Sasanka-509559705729173/">
					<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="scroll_to_top">
			<a href="#top">
				<i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
			</a>
		</div>
	</body>
</html>