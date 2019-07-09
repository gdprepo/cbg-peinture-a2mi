<?php
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

function loadStructure($page, $title) {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title><?php echo $title; ?></title>
        <?php include_once "include-headers.html"?>
      </head>
      <body>

        <?php include_once "header.php"?>


        <div class="container-fluid main-container">
          <div class="row">

            <div class="col-md-12">
              <?php require_once $page ?>
            </div>
          </div>
        </div>
        <div>
        
      </body>
      <?php include_once "footer.php"?>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!---------- SCRIPTS ---------->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.iconmenu.js"></script>
        <script type="text/javascript">
          $(function() {
            $('#sti-menu').iconmenu({
              animMouseenter	: {
                'mText' : {speed : 400, easing : 'easeOutBack', delay : 200, dir : -1},
                'sText' : {speed : 400, easing : 'easeOutBack', delay : 400, dir : -1},
                'icon'  : {speed : 400, easing : 'easeOutBack', delay : 0, dir : -1}
              },
              animMouseleave	: {
                'mText' : {speed : 200, easing : 'easeInExpo', delay : 150, dir : 1},
                'sText' : {speed : 200, easing : 'easeInExpo', delay : 300, dir : 1},
                'icon'  : {speed : 200, easing : 'easeInExpo', delay : 0, dir : 1}
              }
            });
          });
        </script>




    </html>
    <?php
}
?>
