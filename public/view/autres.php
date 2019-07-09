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
  <h1 style="margin-top: 100px;" class="contenus-rouge">Laquage de mobilier</h1>
      
  <p class="contenus">Nous sommes habilités à laquer des meubles : Laquage sur médium brut pour la réalisation de votre cuisine personnalisée, meubles de salle de bain, tables etc..</p>
  
  <p class="contenus">Le laquage peut également s effectuer sur du métal.
  <br /><br />
  Nous travaillons avec des menuisiers ainsi que le magasin LIGNE ROSET à Angoulins /mer.</p>
  
  <p class="container">
    <div style="margin-bottom: 100px;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
      <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./images/meuble1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/meuble2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/meuble3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/meuble4.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/meuble5.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/meuble6.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/meuble7.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/meuble8.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/meuble9.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
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
    
  <h1 style="margin-top: -50px; "class="contenus-rouge">Réparation & peinture en milieu Agricole</h1>
  
  <p class="contenus">Nous effectuons toutes sortes de réparations plastiques et tous travaux de carrosserie & peinture sur vos machines agricoles, anciennes ou récentes.
  <br /><br />
  Nous travaillons en relation avec les établissements BALLANGER. (Aigrefeuille d Aunis, St Jean d Angely)</p>
  
  
  <br /><br /><!----->
  
  
  <h1 class="contenus-rouge">Accessoires</h1>
  
  <p class="contenus">Vente d’essuies-glace, ampoules & plaques d’immatriculation ...</p>
  
  <p class="container">
  <div style="margin-bottom: 150px;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
    <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./images/essuiesglace1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./images/essuiesglace2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
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

      				
      <h1 class="contenus-rouge">Laquage de mobilier</h1>
      
      <p class="contenus">Nous sommes habilités à laquer des meubles : Laquage sur médium brut pour la réalisation de votre cuisine personnalisée, meubles de salle de bain, tables etc..</p>
      
      <p class="contenus">Le laquage peut également s effectuer sur du métal.
      <br /><br />
      Nous travaillons avec des menuisiers ainsi que le magasin LIGNE ROSET à Angoulins /mer.</p>
      
      <p class="container">
        <div style="margin-bottom: 100px;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
          <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./images/meuble1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/meuble2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/meuble3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/meuble4.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/meuble5.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/meuble6.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/meuble7.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/meuble8.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/meuble9.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
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
				
      <h1 style="margin-top: -50px; "class="contenus-rouge">Réparation & peinture en milieu Agricole</h1>
      
      <p class="contenus">Nous effectuons toutes sortes de réparations plastiques et tous travaux de carrosserie & peinture sur vos machines agricoles, anciennes ou récentes.
      <br /><br />
      Nous travaillons en relation avec les établissements BALLANGER. (Aigrefeuille d Aunis, St Jean d Angely)</p>
      
      
      <br /><br /><!----->
      
      
      <h1 class="contenus-rouge">Accessoires</h1>
      
      <p class="contenus">Vente d’essuies-glace, ampoules & plaques d’immatriculation ...</p>
      
      <p class="container">
      <div style="margin-bottom: 50px;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
        <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/essuiesglace1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/essuiesglace2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
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
