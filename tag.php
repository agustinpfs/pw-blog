<?php get_header(); ?>

<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>

<main class="CatTag">
	<div class="CatTag-section">
		<h1>Tag: <?php single_tag_title(); ?></h1>
		<div class="article">
		<?php rewind_posts(); ?>	
		<?php if (is_tag( )) { $tag = get_query_var('tag');
			query_posts('showposts=7&tag='.$tag);} ?>	
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
			</article>	
				
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
				<h3>No se encontraron entradas</h3>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>
	<div class="CatTag-sidebar">
		<?php dynamic_sidebar('unique-sidebar-id'); ?>
	</div>
</main>

<?php get_footer(); ?>