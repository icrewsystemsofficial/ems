<?php   
    // All the PHP Stuff to happen here. 
    require_once ('core/config.php');
    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             ">
    <meta name="author" content="Webpixels">
    <title><?php echo APP_TITLE; ?></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="assets/css/theme.css" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="assets/css/demo.css" rel="stylesheet">
  </head>
  <body>
    <?php include('layouts/partials/navbar.php'); ?>

    <!-- MAIN PAGE SECTION -->

    <main class="main">
      <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/images/backgrounds/img-3.jpg')">
        <span class="mask bg-tertiary alpha-7"></span>
        <div class="spotlight-holder py-lg pt-lg-xl">
          <div class="container d-flex align-items-center no-padding">
            <div class="col">
              <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                <div class="col-lg-7">
                  <div class="text-center mt-5">
                    <h1 class="heading h1 text-white">
                      Events Page.
                    </h1>
                    <p class="lead lh-180 text-white mt-3">
                      Modify this page and create an event management system.

                      <?php 
                        print_r($_SESSION);
                      ?>
                    </p>
                    <div class="mt-5">
                      <a href="#" class="btn btn-primary mr-3">Login</a>
                      <a href="#" class="btn btn-secondary">Register</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="slice-lg">
        <div class="container">
          <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-6 order-lg-2 ml-lg-auto">
              <div class="block block-image">
                <img src="assets/images/prv/device-1.png" class="img-fluid img-center">
              </div>
            </div>
            <div class="col-lg-5 order-lg-1">
              <div class="row-wrapper">
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="icon icon-lg">
                        <i class="fab fa-twitter"></i>
                      </div>
                      <div class="icon-text">
                        <h3 class="heading h4">Latest Bootstrap framework</h3>
                        

                        <p>
                            All the stuff that goes into your page.
                        </p>

                        <?php 
                            $result = $conn->query('SELECT * FROM `dummy`');                        
                            if ($result->num_rows > 0) {                                
                                foreach ($result->fetch_assoc() as $res => $value) {
                                    echo $value;
                                }                
                            } else {
                                echo "0 results";
                            }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>        
              </div>
            </div>
          </div>
        </div>
      </section>                
    </main>
    <!-- END MAIN PAGE SECTION -->


    <?php 
        include ('layouts/partials/footer.php');
    ?>
    
  
  
  <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- FontAwesome 5 -->
  <script src="assets/vendor/fontawesome/js/fontawesome-all.min.js" defer></script>
  <!-- Page plugins -->
  <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="assets/vendor/input-mask/input-mask.min.js"></script>
  <script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
  <script src="assets/vendor/textarea-autosize/textarea-autosize.min.js"></script>
  <!-- Theme JS -->
  <script src="assets/js/theme.js"></script>
</body>
</html>

<?php 
    $conn->close();  
?>