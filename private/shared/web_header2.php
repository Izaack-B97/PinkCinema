<?php if(!isset($page_title)) { $page_title = 'PinkCinema'; } ?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/web.css'); ?>" />
    <!-- FONTS FAMILY -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;600;800&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  </head> 

  <body class="">
  
    <header>
      <!-- <h1>PINKCINEMA</h1> -->
        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo url_for('/web/index.php'); ?>">PinkCinema <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('/web/pages/cartelera.php'); ?>">Cartelera</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('/web/pages/nosotros.php'); ?>">Nosotros</a>
              </li>
            </ul>
            <!-- Form Loggueo -->
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Usuario" aria-label="Usuario">
              <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Acceder</button>
              <button class="btn btn-outline-primary my-2 my-sm-0 ml-2" type="button">Registrarse</button>
            </form> -->
          </div>
        </nav>
      <!-- END NAVBAR -->
    </header>



   
