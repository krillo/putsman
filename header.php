<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
      /*
      .container_12 {
        background:#000 url(< ?php bloginfo('template_directory'); ?>/img/960_12_10_10_X.png) repeat-y scroll 30px 0;
        margin-bottom:20px;
        margin-top: 20px;
        padding-left: 30px;
        width: 990px;
      }
      */
      /*      p {
              overflow:hidden;
              padding:10px 0;
              text-align:left;
            } */
      /*
            .box{background-color: lightblue;height: 50px; margin-bottom: 10px;}
            .extra{height:200px;}
      */
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

  <body <?php body_class(); ?>>
    <!--div id="page"  -->

    <div id="wide-header">
      <div class="center">
      <header >
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
    </div>
</div>
    <div class="vit"></div>



    <div class="container_12">
    <header class="grid_12" id="header-area">
      <hgroup class="grid_7 alpha">
        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" style="float:left;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="putsman" /></a>
        <h1 id="logoh1"><?php bloginfo('name'); ?></h1>
        <!-- div style="float:right;">sök</div-->
      </hgroup>
      <nav class="grid_5 omega">
        <?php wp_nav_menu('sort_column=menu_order'); ?>
      </nav>
      <div class="clear"></div>
    </header>