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
							Projekt i wykonanie: <a href="http://www.codingserwis.pl">codingserwis.pl</a>
						</p>
					</div>
				</div>
				<?php wp_footer();?>
		</footer>
		<div class="scroll_to_top">
			<a href="#top">
				<i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
			</a>
		</div>
	</body>
</html>