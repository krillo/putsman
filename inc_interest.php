<section class="grid_12" id="interest">
  <?php
  $args = array('post_type' => 'interest-text', 'posts_per_page' => 1);
  $loop = new WP_Query($args);
  while ($loop->have_posts()) : $loop->the_post();
    echo '<h3>' . get_the_title() . '</h3>';
    echo '<div>' . get_the_content() . '<div>';
  endwhile;
  ?>
  <a href="intresseanmalan"><img src="<?php bloginfo('template_directory'); ?>/img/intresse_pil.png" alt="till intresseanmälan" /></a>
</section>