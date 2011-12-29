<!DOCTYPE html>
<html <?php language_attributes(); ?> style="">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>" />

    <title><?php wp_title(''); ?></title>

    <!--
		Om du lägger ikonerna i din webbrot så kan du ta bort de här raderna nedan, men vill du att det ska fungera för Android med så bör du behålla dem. 
		Och vill du ha Android 2.1-stöd så måste du också lägga till rel="apple-touch-icon-precomposed".
	-->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.4.css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



    <style type="text/css" media="all">
      body{background-color: #fff;}
    </style>
    <!--[if IE]>
      <script src="http://ajax.cdnjs.com/ajax/libs/modernizr/1.7/modernizr-1.7.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <script type="text/javascript">
      $(function(){
        // Gör något.
      });
    </script>
  </head>
  <?php
    if (is_page('start')) {
      $extra = 'style="height:620px;"';
    } else {
      $extra = '';
    } ?>

    <body <?php body_class(); ?>>
      <div id="wide-header" <?php echo $extra; ?> >
        <div class="center">
          <header id="header-area">
            <hgroup class="">
              <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" style="float:left;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="putsman" /></a>
              <h1 id="logoh1"><?php bloginfo('name'); ?></h1>
              <!-- div style="float:right;">sök</div-->
            </hgroup>
            <nav class="">
            <?php wp_nav_menu('sort_column=menu_order'); ?>
          </nav>
          <div class="clear"></div>
        </header>
        <?php if (is_page('start')) { ?>

          <section  id="carousel">
            <ul id="bigcarousel" class="jcarousel-skin-putsman">
              <?php
              $args = array('post_type' => 'splash-images', 'posts_per_page' => 3);
              $loop = new WP_Query($args);
              while ($loop->have_posts()) : $loop->the_post();
                $img = get_the_post_thumbnail();
                echo '<li><a href="http://boyhappy.se">' . $img . '</a></li>';
              endwhile; ?>
            </ul>
          </section>
        </div>
      </div>
<?php } else { ?>
              </div>
            </div>
<?php } ?>

<div class="container_12">
  <div id="section" class="grid_12 ">






