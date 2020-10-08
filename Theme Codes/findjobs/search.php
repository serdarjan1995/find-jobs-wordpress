<?php get_header(); ?>
<div class="row category-root">
	<div class="col-4 category-div">
		<?php get_template_part( 'category_navigation' ); ?>
	</div>
	<div class="col-8 pt-110px">
		<div class="container">
      <h6><?php printf( esc_html__( 'Search Results for: %s', '' ), '<span class="search_query">' . get_search_query() . '</span>' ); ?></h6>
		</div>
		<div class="container posts-container">

			<?php
			$search = $_GET['s'];
	    $location = $_GET['location'];
			$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
	    $q1 = array(
	        'post_type' => 'post',
	        's' => $search,
	        'posts_per_page' => 6,
	        'paged' => $paged,
	        'meta_query' => array (
	            'relation' => 'OR',
	            array(
	                'key' => 'location',
	                'value' => $location,
	                'compare' => 'LIKE'
	            )
	        )
	    );
	    $query = new WP_Query($q1);
			if ($query->have_posts()): while ($query->have_posts()): $query->the_post();?>

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
			<?php endwhile;?>

			<?php else:?>
				<div class="card-body background-white mb-4">No results for this query</div>
			<?php  endif; ?>
		</div>
		<?php
		if (function_exists('search_pagination')) {
				search_pagination($query->max_num_pages,"",$paged);
		}
		?>
	</div>
</div>


<?php get_footer(); ?>
