<div class="Podcast">
	<h4>Último Podcast</h4>
	<?php rewind_posts(); ?>
	<?php query_posts('posts_per_page=1&cat=8'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="Podcast-content">
			<small><?php the_date(); ?></small>
			<div class="Podcast-title">

				<?php the_title(); ?>
			</div>
				<?php the_content('Entrar'); ?>
			
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
</div>