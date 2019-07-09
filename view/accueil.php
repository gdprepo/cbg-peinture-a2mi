<div class="container">
  <div id="wrapper">




<!------->

</div>

<?php

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

if ($iPod || $iPhone || $iPad || $Android) {
  echo '
  <h1 style="text-align: center; margin-top: 100px" class="contenus"><span style="font-size:16px; font-weight:800;">La carrosserie Fivestar CBG PEINTURE est située à Aigrefeuille d Aunis en Charente-Maritime.</span></h1>

  <h2 class="contenus">Cette entreprise a été créée en février 2009 par Grégory BITARD.
  <br /><br />
  Notre équipe vous accueille pour tous vos travaux en carrosserie & peinture, du lundi au vendredi.
  <br /><br />
  Lors de la réalisation de vos travaux, nous mettons à votre disposition un véhicule de courtoisie.
  <br /><br />
  Agrement assurance et en lien vers de nombreuses assurances : <a href="cbg-peinture-carrosserie-auto-moto.html#assurances">en savoir plus</a></h2>

  <!-- <p class="contenus" style="width:540px;">Lors de la réalisation de vos travaux, nous mettons à votre disposition un véhicule de courtoisie.</p> -->

</div>

<div class="contenus" style="margin-left:15px; width: 315px">
  <iframe style="margin-left: 1%;" width="280" height="250" src="//www.youtube.com/embed/5kf7e7aUuc0" frameborder="0" allowfullscreen></iframe>
</div>

<div style="margin-bottom: 100px;margin-left: 4%;width:315px; float:left;">
  <p class="contenus" style="margin-top:0px;"><img src="images/equipe.jpg" style="width:280px;"/></p>
</div>

<p class="contenus-orange" style="float:left; margin-top:-100px; margin-left:4%; width:315px; font-size:18px; margin-bottom: 150px">
<span style="font-weight:bold;">Adresse :</span> 7 rue du petit Bois<br />
ZA du Fief Girard<br />
17290 LE THOU
<br /><br />
<span style="font-weight:bold;">Téléphone :</span> 05 46 68 11 87
<br /><br />
<span style="font-weight:bold;">Email :</span> contact@cbgpeinture.fr
</p>
<p style=""></p>
  
  
  ';
} else {
  echo '
  <!-- Page Content -->
  <div class="container" style="margin-top: 100px">
    <div id="wrapper">

  <!-- <h1 class="contenus-orange">Fermeture exceptionnelle de la carrosserie CBG PEINTURE<br />Le samedi 4 octobre 2014</h1> -->

      <div style="width:100%; margin-left: 1%;" class="col-md-12">
        <h1 style="text-align: center;" class="contenus-rouge"><span style="font-size:16px; font-weight:800;">La carrosserie Fivestar CBG PEINTURE est située à Aigrefeuille d Aunis en Charente-Maritime.</span></h1>

        <h2 class="contenus">Cette entreprise a été créée en février 2009 par Grégory BITARD.
        <br /><br />
        Notre équipe vous accueille pour tous vos travaux en carrosserie & peinture, du lundi au vendredi.
        <br /><br />
        Lors de la réalisation de vos travaux, nous mettons à votre disposition un véhicule de courtoisie.
        <br /><br />
        Agrement assurance et en lien vers de nombreuses assurances : <a href="cbg-peinture-carrosserie-auto-moto.html#assurances">en savoir plus</a></h2>

        <!-- <p class="contenus" style="width:540px;">Lors de la réalisation de vos travaux, nous mettons à votre disposition un véhicule de courtoisie.</p> -->

      </div>

      <div class="contenus" style="margin-left:25px;">
        <iframe style="margin-left: 3%;" width="850" height="450" src="//www.youtube.com/embed/5kf7e7aUuc0" frameborder="0" allowfullscreen></iframe>
      </div>

      <div style="margin-bottom: 100px;margin-left: 2.5%;width:570px; float:left;">
        <p class="contenus" style="margin-top:0px;"><img src="images/equipe.jpg" style="width:540px;"/></p>
      </div>

      <p class="contenus-orange" style="float:left; margin-top:0px; margin-left:10px; width:350px; font-size:18px;">
      <span style="font-weight:bold;">Adresse :</span> 7 rue du petit Bois<br />
      ZA du Fief Girard<br />
      17290 LE THOU
      <br /><br />
      <span style="font-weight:bold;">Téléphone :</span> 05 46 68 11 87
      <br /><br />
      <span style="font-weight:bold;">Email :</span> contact@cbgpeinture.fr
      </p>
      <p style=""></p>




    </div>

  <!------->

  </div>
  <!-- /.container -->




  ';
}
  ?>
