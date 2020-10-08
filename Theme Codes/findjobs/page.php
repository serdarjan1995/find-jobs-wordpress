<?php get_header(); ?>

<div class="container">
	<h1><?php the_title();?></h1>
	<div class="row">

	</div>
	<?php if (have_posts()):
			while (have_posts()):
				the_post();
				the_content();
			endwhile;
		endif;  ?>
</div>

<?php get_footer(); ?>
