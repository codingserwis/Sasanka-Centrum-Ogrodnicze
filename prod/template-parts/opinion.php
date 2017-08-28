		<li>
			<div class="op_header">
				<img src="<?php echo types_render_field('zdjecie-opinii', array('url' => 'true'))?>">
			</div>
			<blockquote>
				<?php echo types_render_field('tresc-opinia', array('output' => 'raw'))?>
				<span><?php echo types_render_field('podpis-opinia', array('output' => 'raw'))?></span>
			</blockquote>
		</li>