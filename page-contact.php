<?php
/*
  Template Name: contact
 */
get_header();
?>

<div id="section" class="grid_12 ">
</div>
<section class="grid_7 alpha" id="form-area">
  <h1>Hör av dig så pratar vi</h1>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
   <?php endwhile; endif;?>
</section>

<div class="grid_1" id="contact-devider">&nbsp;</div>

<section class="grid_4 omega" id="contact-info">
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
      <div class="contact-info-phone"></div>
      <div class="contact-info-email"></div>
    </section>
  <?php endwhile; ?>


</section>


<section class="grid_12" id="interest">
  <h3>GÖR EN INTRESSEANMÄLAN</h3>
  <div>Låt oss få en tydligare bild på vad ni behöver. Berätta om ert företag eller boende, vilken typ av fönster ni har och om ni är intresserade av ett årsavtal.</div>
  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/arrow2.png" alt="till intresseanmälan" /></a>
</section>

<?php get_footer(); ?>
