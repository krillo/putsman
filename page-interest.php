<?php
/*
  Template Name: Interest
 */
get_header();
?>
<form id="interest-form" action="<?php echo get_field('page-thx'); ?>" method="post">
  <h1 class="grid_12">FYLL I ERA ÖNSKEMÅL SÅ ÅTERKOMMER VI MED OFFERT</h1>
  <section class="grid_12" id="interest-contact">
    <h2>kontaktuppgifter</h2>
    <input type="text" name="i-name" id="i-name" placeholder="Namn och företag" class="grid_6 alpha"/>
    <input type="text" name="i-street" id="i-street" placeholder="Gata" class="grid_6 omega" />
    <input type="text" name="i-email" id="i-email" placeholder="E-postadress" class="grid_6 alpha" />
    <input type="text" name="i-zip" id="i-zip" placeholder="Postnummer" class="grid_6 omega"/>
    <input type="text" name="i-phone" id="i-phone" placeholder="Telefonnummer" class="grid_6 alpha"/>
    <input type="text" name="i-city" id="i-city" placeholder="Ort" class="grid_6 omega"/>
  </section>
  <section class="grid_12" id="interest-type-home">
    <h2>typ av bostad</h2>
    <div><input type="radio" name="i-house-type" value="villa" checked/>Villa</div>
    <div><input type="radio" name="i-house-type" value="Lägenhet" />Lägenhet</div>
    <div><input type="radio" name="i-house-type" value="Lokal" />Lokal</div>

  </section>
  <section class="grid_12" id="interest-count">
    <h2>välj fönsterutseende och ange hur många</h2>
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/windowtype1.jpg" class="grid_3 alpha">
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/windowtype2.jpg" class="grid_3 ">
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/windowtype3.jpg" class="grid_3 ">
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/windowtype4.jpg" class="grid_3 omega">
    <input type="text" name="i-wtype1" id="i-wtype1" placeholder="Ange antal" class="grid_3 alpha"/>
    <input type="text" name="i-wtype2" id="i-wtype2" placeholder="Ange antal" class="grid_3 " />
    <input type="text" name="i-wtype3" id="i-wtype3" placeholder="Ange antal" class="grid_3 " />
    <input type="text" name="i-wtype4" id="i-wtype4" placeholder="Ange antal" class="grid_3 omega"/>
  </section>
  <section class="grid_12" id="interest-window">
    <h2>typ av fönster</h2>
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/windowtype5.jpg" class="grid_3 alpha">
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/windowtype6.jpg" class="grid_3 ">
    <div class="clear"></div>
    <div class="grid_3 alpha"><input type="radio" name="i-wsides" value="tvåsidigt"  checked/>Tvåsidigt</div>
    <div class="grid_3 "><input type="radio" name="i-wsides" value="fyrsidigt" />Fyrsidigt</div>
  </section>
  <section class="grid_12" id="interest-annual" >
    <h2>årsavtal</h2>
    <input type="checkbox" name="i-perodiocity1" value="Ja" />Ja tack, jag önskar utvändig fönsterputs en gång var tredje månad<br/>
    <div id="interest-annual-smaller">
      <input type="checkbox" name="i-perodiocity2" value="Ja" /><span>Jag önskar också invändig fönsterputs en gång om året </span><br/>
      <input type="checkbox" name="i-perodiocity3" value="Ja" /><span>Jag önskar också invändig fönsterputs två gånger om året</span><br/>
    </div>
  </section>
  <section class="grid_12" id="interest-send">
    <input type="hidden" name="i-to" value="<?php echo get_field('email'); ?>">
    <div id="send">
      <input class="" type="submit" value="SKICKA">
    </div>
  </section>
</form>
<?php get_footer(); ?>