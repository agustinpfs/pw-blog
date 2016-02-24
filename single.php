<?php get_header(); ?>	
<?php include TEMPLATEPATH . '/header1.php' ?>


<main class="Single">
<div class="Single-header">
</div>
	<section class="Post">
 		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="Post-article">
			<?php include TEMPLATEPATH . '/contact.php' ?>
				<header class="Post-header">
					<h2 class="Post-title Post-title--single">
						
							<?php the_title(); ?>
						</a>
					</h2>
					<div class="Post-data">
						<small><?php the_date(); ?></small>
						<i>por <strong><?php the_author(); ?></strong></i>
					</div>
				</header>
				
				<div class="Post-content">
					<figure>
						<?php the_post_thumbnail(medium); ?>
					</figure>
				     <?php the_content(); ?>
				</div>
			
				<div class="Post-data Post-data--footer  ">
					<div class="Post-cat">
	 					<span>Categoría</span>
	 					<small><?php the_category(); ?></small>
 					</div> 					
 					<small><em><?php comments_number() ?></em></small>
				</div>			
			</article>

			
			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<h3>No se encontraron entradas</h3>
		<!-- no posts found -->
		<?php endif; ?>
		<div class="Single-comments">
			<?php comments_template(); ?>
		</div>


		</section>
		<div class="Post-sidebar">
			<?php dynamic_sidebar('unique-sidebar-id'); ?>
		</div>


</main>
<?php get_footer(); ?>



