<li class="categories">
  Explore by category
  <ul>
    <?php
      $categories = get_categories(array('hide_empty'=>false,'hierarchical'=>true));
      foreach ($categories as $index => $category) {
        $currentIndex = intval($index)+1;
        echo '<li class="cat-item cat-item-'.strval($currentIndex);
        if(get_queried_object_id() === $category->term_id && !is_front_page()){
          echo ' current-category';
        }
        echo '"><a href="'.get_home_url().'/'.$category->taxonomy.'/'.$category->slug.'">';
        echo '<span class="mdi mdi-'.get_field('cat_icon', $category ).'" style="padding-right:5px;"></span>'.$category->name.'</a></li>';
      }
    ?>
  </ul>
</li>
