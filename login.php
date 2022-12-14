<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/6be7feebbc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./node_modules/pattern.css/dist/pattern.css">
    <link rel="icon" href="img/clickeat logo.png">
    <title>ClickEats!</title>
</head>
<body>
  <nav class="autohide navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./img/clickeat logo hz png.png" alt="startup_logo" height="36"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-lg-flex justify-content-start ms-lg-4" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item ps-lg-3">
            <a class="nav-link text-orange" aria-current="page" href="#">FOOD</a>
          </li>
          <li class="nav-item ps-lg-3">
            <a class="nav-link text-orange" href="#">ORDERS</a>
          </li>
          <li class="nav-item ps-lg-3">
            <a class="nav-link text-orange" href="#">PROFILE</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
      <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item px-lg-3">
            <a class="nav-link text-orange" aria-current="page" href="#">CART <i class="fa-solid fa-cart-shopping"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <section id="login_section">
      <form action="" method="post" onsubmit="return formValidateLogin()" class="col col-md-4 col-sm-2 py-3 px-5 py-xxl-5" id="login_container">
        <fieldset>
            <!-- <div class="logo_section mb-2">
                <img src="./img/clickeat logo png.png" alt="logo" id="logo_img">
            </div> -->
            <div class="mt-2">
              <div class="text-center">
                <h1 class="text-left form-header">Welcome to</h1>
                <img class="click_eat_logo img-fluid" src="./img/clickeat-logo-png.png"  alt="">
                <h5 class="form-sub-header mt-2 mb-4 text-grey">Sign in to continue</h5>
              </div>
            </div>
            <div class="input-group input-group-sm mb-2">
                <div class="form-floating">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    <label for="email" class="form-label">Email</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                    <label for="pass" class="form-label">Password</label>
                </div>
            </div>
            
            <?php
              include('validate_login.php');
              if($count == 0 && $empty == false){
                echo "
                  <div class='alert alert-danger' role='alert'>
                    <label id='error_label'>Wrong email or password entered</label>
                  </div>
                ";
              }
            ?>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" unchecked>
              <label class="form-check-label">Remember Me</label>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary btn-lg col col-12">Log In</button>
            </div>
            <div class="mt-3">
              <p class=".inter-weight-300">Create an account <a href="signup.php" class="link-primary">here</a></p>
            </div>
        </fieldset>
      </form>
    </section>
  </div>

    

  <footer class="text-center text-lg-start bg-white text-muted d-block">

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Get in touch with our team:</span>
      </div>
    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">

        <div class="row mt-3">

          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fa-solid fa-medal"></i><i class="fas fa-gem me-3 text-secondary"></i>Adonis Game Bar<i class="fas fa-gem ms-3 text-secondary"></i><i class="fa-solid fa-medal"></i>
            </h6>
            <img src="./img/Adonis.png" alt="team logo" id="team_logo">
            <p class="mt-3">
              We offer Game Development, Software Development, Graphic Design, Web Development, SEO, DevOps, Social Media Marketing services for MSMEs and Professionals.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              Team Members
            </h6>
            <p>
              <a href="https://www.facebook.com/profile.php?id=100003985007519" class="text-reset">Alforque, Richard Dean</a>
            </p>
            <p>
              <a href="https://www.facebook.com/sho.minamimoto1996" class="text-reset">Asis, Alexander</a>
            </p>
            <p>
              <a href="https://www.facebook.com/vince.delarea" class="text-reset">Dela Rea, Vince Lorenz</a>
            </p>
            <p>
              <a href="https://www.facebook.com/CurieIsMyLove" class="text-reset">Limbo, Moses</a>
            </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              Github Profiles
            </h6>
            <p>
              <a href="https://github.com/tsaaard" class="text-reset">tsaaard</a>
            </p>
            <p>
              <a href="https://github.com/RavioLink" class="text-reset">RavioLink</a>
            </p>
            <p>
              <a href="https://github.com/vincedelarea" class="text-reset">vincedelarea</a>
            </p>
            <p>
              <a href="https://github.com/sidex15" class="text-reset">sidex15</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i>Cavite, Philippines</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              adonisgbar@info.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> 09123456789</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> 09987654321</p>
          </div>

        </div>

      </div>
    </section>
  </footer>
  <script type="text/javascript" src="main.js"></script>
  <!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,26L80,41.2C160,56,320,87,480,91C640,95,800,74,960,56.3C1120,39,1280,26,1440,21.7C1600,17,1760,22,1920,30.3C2080,39,2240,52,2400,58.5C2560,65,2720,65,2880,56.3C3040,48,3200,30,3360,39C3520,48,3680,82,3840,80.2C4000,78,4160,39,4320,23.8C4480,9,4640,17,4800,19.5C4960,22,5120,17,5280,15.2C5440,13,5600,13,5760,10.8C5920,9,6080,4,6240,2.2C6400,0,6560,0,6720,2.2C6880,4,7040,9,7200,13C7360,17,7520,22,7680,23.8C7840,26,8000,26,8160,34.7C8320,43,8480,61,8640,65C8800,69,8960,61,9120,60.7C9280,61,9440,69,9600,73.7C9760,78,9920,78,10080,69.3C10240,61,10400,43,10560,41.2C10720,39,10880,52,11040,58.5C11200,65,11360,65,11440,65L11520,65L11520,130L11440,130C11360,130,11200,130,11040,130C10880,130,10720,130,10560,130C10400,130,10240,130,10080,130C9920,130,9760,130,9600,130C9440,130,9280,130,9120,130C8960,130,8800,130,8640,130C8480,130,8320,130,8160,130C8000,130,7840,130,7680,130C7520,130,7360,130,7200,130C7040,130,6880,130,6720,130C6560,130,6400,130,6240,130C6080,130,5920,130,5760,130C5600,130,5440,130,5280,130C5120,130,4960,130,4800,130C4640,130,4480,130,4320,130C4160,130,4000,130,3840,130C3680,130,3520,130,3360,130C3200,130,3040,130,2880,130C2720,130,2560,130,2400,130C2240,130,2080,130,1920,130C1760,130,1600,130,1440,130C1280,130,1120,130,960,130C800,130,640,130,480,130C320,130,160,130,80,130L0,130Z"></path></svg> -->
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="./node_modules/bootstrap/dist/js/@popperjs/dist/umd/popper.min.js"></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>
</html>