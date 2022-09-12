<div class="header sticky-top">
    <nav class="navbar navbar-expand-md bg-light">
      <a class="navbar-brand " href="index.php">
        <img src="./img/logo.png" class="pglife-logo" alt="">
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#my-navbar"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
        <ul class="navbar-nav">

          <?php
            if (!isset($_SESSION["user_id"])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">
              <i class="fas fa-user icons"></i>Signup</a>
            </li>

            <div class="nav-line"></div>


            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-modal"><i
                    class="fas fa-sign-in-alt icons"></i>Login</a>
            </li>

            <?php
                } else {
                ?>
                  <div class="nav-name">
                    Hii!, <?php echo $_SESSION["full_name"] ?>
                  </div>

                  <li class = "nav-item">
                  <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-user"></i>Dashboard</a>
                  </li>

                  <div class="nav-line"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                <?php
                }
                ?>
        </ul>
      </div>
    </nav>
  </div>

<div id = "loading">
</div>