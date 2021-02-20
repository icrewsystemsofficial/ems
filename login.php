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
    <section class="py-xl bg-cover bg-size--cover" style="background-image: url('assets/images/backgrounds/img-1.jpg')">
        <span class="mask bg-tertiary alpha-6"></span>
        <div class="container d-flex align-items-center no-padding">
          <div class="col">
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card bg-primary text-white">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary btn-nobg btn-zoom--hover mb-5">
                      <span class="btn-inner--icon"><i class="fas fa-arrow-left"></i></span>
                    </button>
                    <span class="clearfix"></span>
                    <h4 class="heading h3 text-white pt-3 pb-5">
                        Welcome to <?php echo APP_TITLE; ?>, <br>
                        Login to continue

                    </h4>
                    <form class="form-primary" method="POST" action="php/processLogin.php">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control" id="input_email" placeholder="Your email" required>
                      </div>
                      <div class="form-group">
                        <input name="password" type="password" class="form-control" id="input_password" placeholder="Password" required>
                      </div>
                      <!-- <div class="text-right mt-4"><a href="#" class="text-white">Forgot password?</a></div> -->
                      <button type="submit" class="btn btn-block btn-lg bg-white mt-4">Sign in</button>
                    </form>
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