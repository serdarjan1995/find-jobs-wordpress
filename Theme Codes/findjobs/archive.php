<?php get_header(); ?>

<div class="row category-root">
	<div class="col-4 category-div">
		<?php get_template_part( 'category_navigation' ); ?>
	</div>
	<div class="col-8 pt-110px">
		<div class="container">
			<h2 class="pl-5 font-times">Find a job <span class="selected-category-title-box"><?php single_cat_title();?></span></h2>
		</div>
		<div class="container posts-container">
			<?php if (have_posts()): while (have_posts()): the_post();?>

				<div class="card-body post background-white mb-4">
					<div class="row">
						<div class="col post-details-widget">
							<span class="mdi mdi-map-marker-radius-outline"></span>
							<?php
							$taxonomies=get_taxonomies('','names');
							$terms = wp_get_post_terms(get_the_ID(), $taxonomies,  array('fields' => 'names'));
							 if( !empty($terms) ) {
								 $term = array_pop($terms);
								 $location = get_field('location', $term );
								 echo $location;
								 $employmentType = get_field('employment_type', $term );
							?>
						</div>
						<div class="col post-details-widget">
							<span class="mdi mdi-calendar-clock"></span> <?php echo $employmentType; } ?>
						</div>
					</div>
					<h3><a class="permalink" href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
					<div class="row post-author-widget">
						<div class="col-2">
							<?php echo get_avatar( get_the_author_email(), '40' );?>
						</div>
						<div class="col-10">
							<div class="col post-company-name">
								<?php echo get_author_name(); ?>
							</div>
							<div class="col post-details-widget">
								<?php echo meks_time_ago();?>
							</div>

						</div>
					</div>
				</div>
			<?php endwhile; else:?>
				<div class="card-body background-white mb-4">No posted jobs for this category</div>
			<?php  endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
