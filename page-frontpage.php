<?php
/*
  Template Name: Frontpage
 */
get_header();
?>


<section class="grid_12" id="testimonial">
  <h4>Vad säger kunderna</h4>
  <div class="grid_2 alpha">&nbsp;</div>
    <div class="grid_8" style="float:left;overflow:hidden;">
      <ul id="testimonial-carousel" class="jcarousel-skin-putsman">
        <?php
        $args = array('post_type' => 'citat', 'posts_per_page' => 3);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
          $cont = get_the_content();
          echo '<li>'. $cont . '</li>';
        endwhile; ?>
      </ul>
    </div>
  <div class="grid_2 omega">&nbsp;</div>
</section>
<section class="grid_12" id="whoarewe">
  <h4>Vilka är vi</h4>
  <?php
  $args = array('post_type' => 'whoarewe', 'posts_per_page' => 3);
  $loop = new WP_Query($args);
  $i = 1;
  while ($loop->have_posts()) : $loop->the_post();
    switch ($i) {
      case 1:
        $extra = 'alpha';
        break;
      case 3:
        $extra = 'omega';
        break;
      default:
        $extra = '';
        break;
    }
  ?>
    <section class="grid_4 whoarewebox <?php echo $extra; ?>">
    <?php the_content(); ?>
  </section>
  <?php $i++;
  endwhile; ?>
</section>
<div class="clear"></div>
<section class="grid_12" id="readmoresection">
  <div class="grid_2 alpha readmorebox">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/img/square1.png" alt="förstaklassigt" />
      <h3>FÖRSTAKLASSIGT</h3>
    </a>
  </div>
  <div class="grid_1 readmorebox">
  </div>
  <div class="grid_2 readmorebox">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/img/square2.png" alt="hög kvalitet" />
      <h3>HÖG KVALITET</h3>
    </a>
  </div>
  <div class="grid_1 readmorebox">
  </div>
  <div class="grid_2 readmorebox">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/img/square3.png" alt="skräddarsytt" style="float:left;"/>
      <h3 style="float:left;">SKRÄDDARSYTT</h3>
    </a>
  </div>
  <div class="grid_1 readmorebox">
  </div>
  <div class="grid_3 omega readmorebox">
    <a href="om-oss" ><div id="readmore">LÄS MER OM PUTSMAN</div></a>
  </div>
</section>
<section class="grid_12" id="contact">
  <h2 class="large-text">HÖR AV DIG SÅ PRATAR VI</h2>
  <?php $loop = new WP_Query('pagename=kontaktformular');
  while ($loop->have_posts()) : $loop->the_post();
    the_content();
  endwhile;
  ?>
</section>
<section class="grid_12" id="interest">
  <h3>GÖR EN INTRESSEANMÄLAN</h3>
  <div>Låt oss få en tydligare bild på vad ni behöver. Berätta om ert företag eller boende, vilken typ av fönster ni har och om ni är intresserade av ett årsavtal.</div>
  <a href="intresseanmalan"><img src="<?php bloginfo('template_directory'); ?>/img/arrow2.png" alt="till intresseanmälan" /></a>
</section>

<?php get_footer(); ?>
