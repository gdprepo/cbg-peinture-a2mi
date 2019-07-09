<?php
session_start();
include_once './../src/setup.php';
include_once './layout/structure.php';

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery.backstretch.js"></script>
<script>
    $.backstretch([
      "images/img1.jpg",
      "images/img2.jpg",
      "images/img3.jpg",
      "images/img4.jpg",
      "images/img5.jpg"
    ], {
      fade: 750,		//Speed of Fade
      duration: 4000 	//Time of image display
    });
</script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <img style="<?php

              if ($iPod || $iPhone || $iPad || $Android) {
                echo 'width: 80px;';
              } else {
                echo 'width: 100px; margin-left: -50px';
              }

        ?>

     " id="id" src="img/etoiles.png" >
    <img style="<?php

              if ($iPod || $iPhone || $iPad || $Android) {
                echo 'width: 50%;';
              } else {
                echo 'width: 100px;';
              }

        ?>

     " id="id" src="img/logo.png" >
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php

    if ($iPod || $iPhone || $iPad || $Android) {
      echo '
      <div class="navbar-collapse collapse" id="navbarResponsive" style="align-items: center; margin-left: 15%;">
        <ul class="navbar-nav ml-auto" style="width: 100%;">
          <li style="margin-left: -10px" class="nav-item active">
            <a class="nav-link" href="/index.php">
              <img src="./img/icon_menu1.png" style="width: 30px;">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li style="margin-left: 16%;margin-top: -50px;" class="nav-item">
            <a class="nav-link" href="/carrosserie.php">
                <img src="./img/icon_menu2.png" style="width: 30px; margin-top: 5px">
            </a>
          </li>
          <li style="margin-left: 36%;margin-top: -45px;" class="nav-item">
            <a class="nav-link" href="/remplacement.php">
              <img src="./img/icon_menu3.png" style="width: 30px; margin-top: 5px">
            </a>
          </li>
          <li style="margin-left:56%;margin-top: -46px;" class="nav-item">
            <a class="nav-link" href="/autres.php">
              <img src="./img/icon_menu4.png" style="width: 30px;   ">
            </a>
          </li>
          <li style="margin-left: 76%;margin-top: -46px;" class="nav-item">
          <a class="nav-link" href="/contact.php">
            <img src="./img/icon_menu5.png" style="width: 30px;   ">
          </a>
        </li>
        </ul>
      </div>


      ';




    } else {
      echo '
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a href="/index.php">
              <img class="animated bounceInLeft" style="width: 100px; margin-left: -100px; margin-bottom: 10px" id="id" src="img/etoiles.png">
              <img class="animated bounceInLeft" id="id" src="img/logo.png">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarResponsive" style="">
              <ul class="navbar-nav ml-auto" style="margin-right: 200px;width: 100px;">
                <li style="margin-left: -100px;" class="nav-item active">
                  <a class="nav-link" href="/index.php">
                    <img src="./img/icon_menu1.png" style="width: 40px; color: red; backround-color: red">
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li style="margin-left: 50px" class="nav-item">
                  <a class="nav-link" href="/carrosserie.php">
                      <img src="./img/icon_menu2.png" style="width: 40px; margin-top: 5px">
                  </a>
                </li>
                <li style="margin-left: 50px" class="nav-item">
                  <a class="nav-link" href="/remplacement.php">
                    <img src="./img/icon_menu3.png" style="width: 40px; margin-top: 5px">
                  </a>
                </li>
                <li style="margin-left: 50px" class="nav-item">
                  <a class="nav-link" href="/autres.php">
                    <img src="./img/icon_menu4.png" style="width: 40px;   ">
                  </a>
                </li>
                <li style="margin-left: 50px" class="nav-item">
                <a class="nav-link" href="/contact.php">
                  <img src="./img/icon_menu5.png" height=80% style="width: 40px;   ">
                </a>
              </li>
              </ul>
            </div>
          </div>
        </nav>


      ';



    }
    ?>







  </div>
</nav>
