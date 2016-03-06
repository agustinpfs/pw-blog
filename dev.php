<div class="Dev">
	<h4>Desarrollo en curso:</h4>
	<?php rewind_posts(); ?>
	<?php query_posts('posts_per_page=1&cat=10&order=Asc'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="Dev-content">
			<div class="Dev-title">
				<?php the_title(); ?>
			</div>
				<?php the_content(Entrar); ?>			
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
</div>