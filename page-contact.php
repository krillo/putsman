<?php
/*
  Template Name: contact
 */
get_header();
?>


<section class="grid_7" id="form-area">
  <h1>Hör av dig så pratar vi</h1>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
   <?php endwhile; endif;?>
</section>

<div class="grid_1" id="contact-devider">&nbsp;</div>

<section class="grid_4" id="contact-info">
  <?php
  $args = array('post_type' => 'visitkort', 'posts_per_page' => 3);
  $loop = new WP_Query($args);
  while ($loop->have_posts()) : $loop->the_post();
    $name = get_field('name');
    $position = get_field('position');
    $email = get_field('email');
    $phone = get_field('phone');
    if($position != ''){
      $title = $name .' / <span style="color:#b0b0b0;">' . $position . '</span>';
    } else{
      $title = $name;
    }
  ?>
    <section class="contact-info-box">
      <h2><?php echo $title; ?></h2>
      <div class="contact-info-phone"><?php echo $phone; ?></div>
      <div class="contact-info-email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
    </section>
  <?php endwhile; ?>
</section>
<?php include 'inc_interest.php'; ?>
<?php get_footer(); ?>
