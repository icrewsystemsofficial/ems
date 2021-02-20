<nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4">
      <div class="container">
        <a class="navbar-brand" href="../"><?php echo APP_TITLE; ?></a>
        <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto align-items-lg-center">
            <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Menu</h6>
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            
            <li class="nav-item ">
              <a class="nav-link" href="events.php">Events</a>
            </li>

            

            <?php 

            if($_SESSION['logged_in']) {
              ?>
              <li class="nav-item ">
                <a class="nav-link" href="profile.php">Hi, <?php echo $_SESSION['name']; ?> <i class="fa fa-user"></i></a>
              </li>
              <?php
            } else {
              ?>
              <li class="nav-item">
                <a class="nav-link btn btn-sm btn-primary text-white" href="login.php">Login</a>
              </li>
              <?php
            }
            ?>

            
          </ul>
        </div>
      </div>
    </nav>