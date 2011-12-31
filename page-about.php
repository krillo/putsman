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
    $link = get_field('pufflink');
    $title = get_the_title();
    $img = get_the_post_thumbnail();
    $content = get_the_content();
  ?>
    <section class="grid_4 whoarewebox <?php echo $extra; ?>">
      <a href="<?php echo $link; ?>"><?php echo $img ?></a>
      <h2><a href="<?php echo $link; ?>"><?php echo $title ?></a></h2>
      <a href="<?php echo $link; ?>"><?php echo $content ?></a>
  </section>
    <?php $i++;
  endwhile; ?>
</section>
<div class="clear"></div>
<?php include 'inc_interest.php'; ?>
<script type="text/javascript">
$(function() {
	$('#fieldimages a').lightBox(); // Select all links in object with gallery ID
});
</script>
<section class="grid_12" id="fieldimages">
  <h4>bilder från fältet</h4>
  <?php
  $args = array('post_type' => 'field-images', 'posts_per_page' => 12);
  $loop = new WP_Query($args);
  $i = 0;
  while ($loop->have_posts()) : $loop->the_post();
    $mod = $i % 4;
    switch ($mod) {
      case 0:
        $extra = 'alpha';
        break;
      case 3:
        $extra = 'omega';
        break;
      default:
        $extra = '';
        break;
    }
    $thumb = get_the_post_thumbnail(null, 'field-img');
    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
    $attachmentData = wp_get_attachment_image_src($post_thumbnail_id, 'full');
    $imgLink = $attachmentData[0];
  ?>
    <section class="grid_3 field-img-box <?php echo $extra; ?>">
      <a href="<?php echo $imgLink; ?>"><?php echo $thumb; ?></a>
  </section>
    <?php $i++;
  endwhile; ?>




</section>
<?php get_footer(); ?>
