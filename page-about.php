<?php
/*
  Template Name: about
 */
get_header();
?>

<div id="section" class="grid_12 ">
</div>
<section class="grid_12" id="employee-img-area">

  <div id="employee-img-heading">Detta är vi<div id="employee-img-text">åtmionstone några av oss</div></div>

</section>
<section class="grid_12" id="whoarewe" style="height:940px;margin-top:20px;border-bottom: none;">
  <?php
  $args = array('post_type' => 'whoarewe', 'posts_per_page' => 12);
  $loop = new WP_Query($args);
  $i = 0;
  while ($loop->have_posts()) : $loop->the_post();
    $mod = $i % 3;
    switch ($mod) {
      case 0:
        $extra = 'alpha';
        break;
      case 2:
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

<section class="grid_12" id="interest">
  <h3>GÖR EN INTRESSEANMÄLAN</h3>
  <div>Låt oss få en tydligare bild på vad ni behöver. Berätta om ert företag eller boende, vilken typ av fönster ni har och om ni är intresserade av ett årsavtal.</div>
  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/arrow2.png" alt="till intresseanmälan" /></a>
</section>

<section class="grid_12" id="fieldimages">
  <h4>bilder från fältet</h4>
  <div>Låt oss få en tydligare bild på vad ni behöver. Berätta om ert företag eller boende, vilken typ av fönster ni har och om ni är intresserade av ett årsavtal.</div>
  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/arrow2.png" alt="till intresseanmälan" /></a>
</section>


<?php get_footer(); ?>
