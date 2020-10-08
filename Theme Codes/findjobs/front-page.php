<?php get_header(); ?>

<div class="row category-root">
	<div class="col-4 category-div">
		<?php get_template_part( 'category_navigation' ); ?>
	</div>
	<div class="col-8 pt-110px">
		<div class="container">
			<?php if (have_posts()): while (have_posts()): the_post();?>
				<div class="card-body background-white mb-4">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt();?>
					<!--<a href="<?php the_permalink()?>" class="btn btn-success"> Read More</a>-->
				</div>
			<?php endwhile; else:?>
				<div class="card-body background-white mb-4">No posted jobs</div>
			<?php  endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
