<div class="container">
  <?php

    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

    if ($iPod || $iPhone || $iPad || $Android) {
      echo '
    <h1 style="margin-top: 150px; margin-bottom: -30px" class="contenus-rouge">Nous contacter</h1>
      ';
    } else {
      echo '
    <h1 style="margin-top: 130px; margin-bottom: -50px;" class="contenus-rouge">Nous contacter</h1>

    </p>
      ';
    }
  ?>

  <div id="wrapper">




    <?php
      if ($iPod || $iPhone || $iPad || $Android) {
        echo '
        <div class="container animated bounceInRight">
        <div id="wrapper">
          <form class="contenus" style="width: 30%" action="/mail.php" method="post">
              <div class="form-group">
                  <label style="margin-bottom: 10px;" for="exampleInputEmail1">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text ">Entrer une adresse e-mail valide.</small>
              </div>
              <div class="form-group">
                  <label style="margin-bottom: 10px;" for="exampleInputPassword1">Sujet du Message</label>
                  <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="sujet">
              </div>
              <div class="form-group">
                  <label style="margin-bottom: 10px;" for="exampleFormControlTextarea1">Votre Message</label>
                  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button style="margin-top: 50px ;margin-left: 25%; width:50% ;background-color: black;" name="answer" type="submit" class="btn btn-outline-danger">Envoyer</button>
          </form>
        </div>

      <p class="contenus" style="width: 31%; margin-top: -50px">
        <span style="font-size:16px; font-weight:600;">N hésitez pas à nous contacter !!</span>
        <br />
        <span style="font-size:16px; font-weight:600;">Devis gratuit !!</span>
      </p>
            
    </div>
  </div>

    <div>	
      <div id="wrapper" style="float:middle; height: 300px ;margin-top: -50px ;width: 90%;"class="carte-accueil-3"><div style="height: 250px" id="map_canvas"></div></div>
    </div>


    <div style="margin-bottom: 100px; margin-top: -50px; width: 90%; margin-left: 5%;" id="carouselExampleControls" class="contenus carousel slide" data-ride="carousel">
    <div style="margin-left: 25%; width: 50%;" class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./images/contact1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./images/contact2.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./images/contact3.jpg" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
      </div>
  
      </div>
      <a style="margin-left: 25%" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a style="margin-right: 25%;" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
   
    


    <h1 style="width: 100%; margin-bottom: -0px" class="contenus-orange" id="wrapper">Partenaires</h1>

    <p class="contenus" id="wrapper" style="clear:both; width: 100%">
      <span style="font-size:15px;font-weight:700;">VIP Limousine 17</span><br />
      <a href="http://viplimousine17.com" target="_blank">Voir le site web</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="images/vip-limousine.jpg" target="_blank">Voir la carte de visite</a>
    </p>
    
    <p class="contenus" id="wrapper" style="clear:both; margin-bottom: 150px; margin-top: -50px; width: 100%">
      <span style="font-size:15px;font-weight:700;">USA Passion</span><br />
      <a href="http://www.usa-passion.com" target="_blank">Voir le site web</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="mailto:usapassion17@gmail.com">usapassion17@gmail.com</a>
    </p>


</div>
        ';
      } else {
        echo '
            <div class="container animated bounceInRight">
            <div id="wrapper">
              <form class="contenus" style="margin:10%; width: 75%" action="/mail.php" method="post">
                  <div class="form-group">
                      <label style="margin-bottom: 10px;" for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text ">Entrer une adresse e-mail valide.</small>
                  </div>
                  <div class="form-group">
                      <label style="margin-bottom: 10px;" for="exampleInputPassword1">Sujet du Message</label>
                      <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="sujet">
                  </div>
                  <div class="form-group">
                      <label style="margin-bottom: 10px;" for="exampleFormControlTextarea1">Votre Message</label>
                      <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button style="margin-top: 50px ;margin-left: 25%; width:50% ;background-color: black;" name="answer" type="submit" class="btn btn-outline-danger">Envoyer</button>
              </form>
            </div>

        <div class="" style="margin-top: -70px">
        <div style="" id="wrapper">
          <p class="contenus" style="">
            <span style="font-size:16px; font-weight:600;">N hésitez pas à nous contacter !!</span>
            <br />
            <span style="font-size:16px; font-weight:600;">Devis gratuit !!</span>
          </p>
                


          <p class="contenus-orange" style="float:right; margin-left:0px; margin-top:0px; width:50%; font-size:18px;">
            <span style="font-weight:bold;">Adresse :</span> 7 rue du petit Bois<br />
            ZA du Fief Girard<br />
            17290 LE THOU
            <br /><br />
            <span style="font-weight:bold;">Téléphone :</span> 05 46 68 11 87
            <br /><br />
            <span style="font-weight:bold;">Email :</span> contact@cbgpeinture.fr
            <br /><br />
            <span style="font-weight:bold;">Horaires :</span><br />
            Du lundi au jeudi : 08h-12h & 14h-19h<br />
            Vendredi : 8h-12h & 14h-18h
          </p>
        </div>
      </div>

        <div>	
          <div id="wrapper" style="float:left; height: 325px ;margin-top: -420px ;width: 48%;"class="carte-accueil-3"><div style="height: 280px" id="map_canvas"></div></div>
        </div>

        <p style="margin-top:-50px; margin-bottom: 50px" class="contenus">
					<img src="images/contact1.jpg" style="margin-right:7px; height: 190px; margin-left: 10px" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
					<img src="images/contact2.jpg" style="margin-right:7px; height: 190px" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
					<img src="images/contact3.jpg" style="height: 190px;" alt="Cbg Peinture - Carrosserie La Rochelle Aigrefeuille">
        </p>   
        

        <h1 class="contenus-orange" id="wrapper">Partenaires</h1>
		
				<p class="contenus" id="wrapper" style="clear:both;">
					<span style="font-size:15px;font-weight:700;">VIP Limousine 17</span><br />
					<a href="http://viplimousine17.com" target="_blank">Voir le site web</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="images/vip-limousine.jpg" target="_blank">Voir la carte de visite</a>
				</p>
				
				<p class="contenus" id="wrapper" style="clear:both; margin-bottom: 100px; margin-top: -50px">
					<span style="font-size:15px;font-weight:700;">USA Passion</span><br />
					<a href="http://www.usa-passion.com" target="_blank">Voir le site web</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="mailto:usapassion17@gmail.com">usapassion17@gmail.com</a>
				</p>


    </div>

    
        
    
    ';
      }




    ?>


<!------->

</div>

