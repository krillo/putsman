<?php
/*
  Template Name: Tack-sida
 */
get_header();
?>
<div class="grid_1 box"></div>
<div id="section" class="grid_10 ">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php if (have_posts ()) : ?>
    <?php while (have_posts ()) : the_post(); ?>
    <?
        $to = isset($_POST['i-to']) ? $_POST["i-to"] : "";
        $name = isset($_POST['i-name']) ? $_POST["i-name"] : "";
        $street = isset($_POST['i-street']) ? $_POST["i-street"] : "";
        $email = isset($_POST['i-email']) ? $_POST["i-email"] : "";
        $zip = isset($_POST['i-zip']) ? $_POST["i-zip"] : "";
        $phone = isset($_POST['i-phone']) ? $_POST["i-phone"] : "";
        $city = isset($_POST['i-city']) ? $_POST["i-city"] : "";
        $houseType = isset($_POST['i-house-type']) ? $_POST["i-house-type"] : "";
        $wtype1 = isset($_POST['i-wtype1']) ? $_POST["i-wtype1"] : "0";
        $wtype2 = isset($_POST['i-wtype2']) ? $_POST["i-wtype2"] : "0";
        $wtype3 = isset($_POST['i-wtype3']) ? $_POST["i-wtype3"] : "0";
        $wtype4 = isset($_POST['i-wtype4']) ? $_POST["i-wtype4"] : "0";
        $wsides = isset($_POST['i-wsides']) ? $_POST["i-wsides"] : "0";
        $perodiocity1 = isset($_POST['i-perodiocity1']) ? $_POST["i-perodiocity1"] : "";
        $perodiocity2 = isset($_POST['i-perodiocity2']) ? $_POST["i-perodiocity2"] : "";
        $perodiocity3 = isset($_POST['i-perodiocity3']) ? $_POST["i-perodiocity3"] : "";

        $content_to_show = "Mailet kunde tyvärr inte skickas. Försök igen senare eller kontakta oss gällande felet.";

        $message = "Intresseanmälan från $name <br><br>";
        $message .= "Hustyp: $houseType <br>";
        $message .= "Fönsterutseende 1, antal: $wtype1 <br>";
        $message .= "Fönsterutseende 2, antal: $wtype2 <br>";
        $message .= "Fönsterutseende 3, antal: $wtype3 <br>";
        $message .= "Fönsterutseende 4, antal: $wtype4 <br>";
        $message .= "Fönstertyp: $wsides <br>";
        $message .= "Utvändigt var 3:e månad :  $perodiocity1 <br>";
        $message .= "Invändigt en gång om året :  $perodiocity2 <br>";
        $message .= "Invändigt två gånger om året :  $perodiocity3 <br><br><br>";
        $message .= "$name <br>";
        $message .= "$street <br>";
        $message .= "$zip <br>";
        $message .= "$email <br>";
        $message .= "$phone <br>";

        if ($to != "" && $message != "") {
          $headers = 'To: ' . $to . ' <' . $to . '>' . "\r\n";
          $headers .= 'From: ' . $email . ' <' . $email . '>' . "\r\n";
          $headers .= 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=UTF-8' . '\r\n';

          $success = mail($to, "Intresseanmälan : " . $from, $message, $headers);
          if ($success):
            $content_to_show = get_the_content($post->ID);
          else:
            $content_to_show = "Mailet kunde tyvärr inte skickas. Försök igen senare eller kontakta oss gällande felet.";
          endif;
        }
    ?>
    
        <h1><?php the_title(); ?></h1>
    <?php echo $content_to_show ?>
    <?php endwhile; ?>
    <?php else : ?>
          <h2 class="center">Sidan kunde inte hittas.</h2>
    <?php endif; ?>
        </article>

      </div>
      <div class="grid_1 box"></div>

<?php get_footer(); ?>








