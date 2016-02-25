<?php 
/*
Template Name: Página index
*/ ?>
<?php get_header(); ?>

<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>
<div class="Index-image">
	<?php include TEMPLATEPATH . '/image.php' ?>
</div>
<main class="Index">
	<div class="Index-section">
		<?php rewind_posts(); ?>
	<!-- 		// <?php query_posts('cat=2'); ?>
	-->		
		<?php query_posts('posts_per_page=7&order=Asc'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="Index-article">
				<div class="Index-data">
					<small><?php the_time('d-m-Y'); ?></small>
					<small>por <i><strong><?php the_author(); ?></strong></i></small>
				</div>
				<div class="Index-title">				
					<a href="<?php the_permalink(); ?>"> 
						<?php the_title(); ?>
					</a>				
				</div>
				<div class="Index-content">
					<?php the_content(); ?>
				</div>
				<!-- <div class="Index-excerpt">
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>"> 
						ir al artículo
					</a>
				</div> -->
				
		</article>	
			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<h3>No se encontraron entradas</h3>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
	<div class="Index-sidebar">
		<?php dynamic_sidebar('unique-sidebar-id'); ?>
	</div>
</main>

<?php get_footer(); ?>


