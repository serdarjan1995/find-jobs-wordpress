<?php

function load_stylesheets()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.2', 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','load_stylesheets');


function load_js()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.5.1');
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '4.5.2');
	wp_enqueue_script('bootstrap');

	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1');
	wp_enqueue_script('scripts');

}
add_action('wp_enqueue_scripts','load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

register_nav_menus(
	array(
		'navbar' => __('Navbar', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme')
	)
);



function registerCustomQueryParam( $vars ) {
    $vars[] = 'query';
    return $vars;
}
add_filter( 'query_vars', 'registerCustomQueryParam' );

function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}


function search_pagination($numpages = '', $pagerange = '', $paged='') {
  if (empty($pagerange)) {
    $pagerange = 2;
  }
  $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    $numpages = $query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }
  $pagination_args = array(
    'base'            => '%_%',
    'format'          => '?page=%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
  );

  $paginate_links = paginate_links($pagination_args);
  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo $paginate_links;
    echo "</nav>";
  }
}
