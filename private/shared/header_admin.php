<?php if(!isset($page_title)) { $page_title = 'PinkCinema'; } ?>

<!doctype html>

<html lang="en">
  <head>
    <title>PINKCINEMA - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <!-- FONTS FAMILY -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;600;800&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/web.css'); ?>" />

  </head> 

  <body class="bg-light">
    <header>
      <!-- <h1>PINKCINEMA</h1> -->
        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="<?php echo url_for('web/index_admin.php'); ?>" class="navbar-brand">
                    PinkCinema
                </a>
            </div>
        </nav>    
      <!-- END NAVBAR -->
    </header>


