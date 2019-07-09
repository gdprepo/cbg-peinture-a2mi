<div class="container">
  <div id="wrapper">


<?php

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

if ($iPod || $iPhone || $iPad || $Android) {
  echo '
  <h1 style="margin-top: 100px; width: 31%;" class="contenus-orange">Remplacement de pare-brise et réparation d impact</h1>		
  <p class="contenus" style="clear:both; width: 31%">
  Nous changeons et réparons les pare-brises & vitrages de véhicules toutes marques confondues, pour plus de simplicité nous nous occupons de toutes les démarches administratives avec votre assurance.
  <br /><br />
  Pendant le temps du remplacement, nous vous prêtons un véhicule de courtoisie.</p>
  <p class="container">
  <div style="margin-bottom: 100px; width: 31%" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
  <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/twingo1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/twingo2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/twingo3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>

    </div>
    <a style="margin-left: 25%" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>
    <a style="margin-right: 25%;" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>
  </div>
</p>
  ';
} else {
  echo '
  <div class="container">
    <div style="margin-left: 1%;" id="wrapper">
        <h1 class="contenus-orange">Remplacement de pare-brise et réparation d impact</h1>
        <p class="contenus" style="clear:both;">
        Nous changeons et réparons les pare-brises & vitrages de véhicules toutes marques confondues, pour plus de simplicité nous nous occupons de toutes les démarches administratives avec votre assurance.
        <br /><br />
        Pendant le temps du remplacement, nous vous prêtons un véhicule de courtoisie.</p><p class="container">
        <div style="margin-bottom: 100px;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
          <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./images/twingo1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/twingo2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/twingo3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>

          </div>
          <a style="margin-left: 25%" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a style="margin-right: 25%;" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </p>
    </div>
  </div>
  ';
}
  ?>
