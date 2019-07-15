<div class="container">
  <div id="wrapper">


<!------->


<?php

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

if ($iPod || $iPhone || $iPad || $Android) {
  echo '
<h1 style="margin-top: 100px; width: 31%" class="contenus-rouge">Carroserie Automobile</h1>
<p class="contenus" style="width: 31%">Dans nos ateliers, nous nous occupons de votre véhicule quelque soit la marque.
<br><br>
Nous disposons de matériel moderne ainsi que des aires de préparation avec aspiration au sol, table élévatrice, pont &amp; une cabine de peinture dernier cri OMIA LUXIA 700.</p>
<p class="container">
  <div style="margin-bottom: 100px; width: 31%" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
    <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/8.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/11.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/limousine1.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/6.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/auto2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div></div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/reparation1.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/15.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/32.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mustang1.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mustang2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mustang3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
    </div>


    </div>
    <a style="margin-left: 25%" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>
    <a style="margin-right: 25%;" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>


    <p style="margin-top: -80px; margin-bottom: 100px; width: 31%" class="contenus">Nous utilisons de la peinture hydro-diluable de la marque CROMAX. Nous effectuons également le changement de votre pare-brise. (Agrément d Assurance avec ALLIANZ)
    <br /><br />
    Nous disposons d’un camion pour le transport de votre véhicule.
    <br /><br />
    Pendant les travaux, un véhicule de courtoisie est à votre disposition. Lorsque les travaux sont terminés, nous vous restituons votre véhicule avec nettoyage intérieur & extérieur.</p>
  
  </div>

</p>
  ';
} else {
  echo '
  <div class="container">
    <div style="margin-left: 1%; margin-top: 80px" id="wrapper">
      <h1 class="contenus-rouge">Carroserie Automobile</h1>
      <p class="contenus">Dans nos ateliers, nous nous occupons de votre véhicule quelque soit la marque.
      <br><br>
      Nous disposons de matériel moderne ainsi que des aires de préparation avec aspiration au sol, table élévatrice, pont &amp; une cabine de peinture 
      <br><br>
      dernier cri OMIA LUXIA 700.</p>
      <p class="container">
        <div style="margin-bottom: 100px;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
          <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./images/3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/8.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/11.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/limousine1.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/6.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/auto2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div></div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/reparation1.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/15.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/32.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/mustang1.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/mustang2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/mustang3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
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

      <p class="contenus">Nous utilisons de la peinture hydro-diluable de la marque CROMAX. Nous effectuons également le changement de votre pare-brise. (Agrément d Assurance avec ALLIANZ)
      <br /><br />
      Nous disposons d’un camion pour le transport de votre véhicule.
      <br /><br />
      Pendant les travaux, un véhicule de courtoisie est à votre disposition. Lorsque les travaux sont terminés, nous vous restituons votre véhicule avec nettoyage intérieur & extérieur.</p>

    </div>
  </div>
  ';
}
  ?>
