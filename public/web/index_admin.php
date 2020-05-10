<!-- <?php require_once('../../private/initialize.php'); ?> -->
<?php $page_title = 'Inicio'; ?>
<?php include(SHARED_PATH . '/header_admin.php'); ?>

<?php

	session_start();
	if (!isset($_SESSION['rol'])) { // No puede entrar si no tiene un rol
		header('location: login.php');
	} else {
		if ($_SESSION['rol'] != 1) { //Obligamos al usuario a que entre al admin solo por el login
			header('location: login.php');
		}
	}

	if (isset($_GET['cerrar_sesion'])) {
		session_unset(); // Cerramos session
		session_destroy(); // Detruimos la session
		redirect_to(url_for('web/login.php'));
	}
	$peliculas = find_all_peliculas();
?>

<br>

<div id="content-main" class="container mt-2">
	
	<!-- START LOGOUT -->
	<?php include(SHARED_PATH . '/logout.php'); ?>
	<!-- END LOGOUT -->
	
	<!-- START CARRUSEL -->
	<div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="<?php echo url_for('web/images/avengers.jpg'); ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
			</div>
			<div class="carousel-item">
			<img src="<?php echo url_for('web/images/spyder.jpg'); ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			</div>
			<div class="carousel-item">
			<img src="<?php echo url_for('web/images/blackwidow.jpg'); ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- END CARRUSEL -->
    <h1 class="text-primary">Bienvenido  a PinkCinema</h1>
    <h3>Administrador</h3>
	<br>
	<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum esse adipisci vel vitae illum incidunt, cumque placeat dolores quisquam voluptas minus libero maiores in ipsam animi numquam iure architecto molestias.</p> -->
	<hr>
	<h2>Peliculas Recientes</h2>
	<div id="area-peliculas-recientes" class="row my-3">
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>

	</div>	
	<hr>
	<h2 class="" style="">Proximos estrenos</h1>
	<div id="area-peliculas-recientes" class="row my-3">
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		<div class="col-sm-3">
			<img src="images/endgame.jpg" class="mx-2 my-2">
		</div>
		
	</div>	
	<!-- <div id="area-estreno" class="mb-5 mt-5">	
		<div class="card d-inline-block m-1" style="width:18rem;">
			<img src="<?php echo url_for('web/images/megalodon.jpg'); ?>" class="card-img-top" alt="...">
		</div>
		<div class="card d-inline-block m-1" style="width:18rem;">
			<img src="<?php echo url_for('web/images/megalodon.jpg'); ?>" class="card-img-top" alt="...">
		</div>
		<div class="card d-inline-block m-1" style="width:18rem;">
			<img src="<?php echo url_for('web/images/megalodon.jpg'); ?>" class="card-img-top" alt="...">
		</div>
		<div class="card d-inline-block m-1" style="width:18rem;">
			<img src="<?php echo url_for('web/images/megalodon.jpg'); ?>" class="card-img-top" alt="...">
		</div>
		<div class="card d-inline-block m-1" style="width:18rem;">
			<img src="<?php echo url_for('web/images/megalodon.jpg'); ?>" class="card-img-top" alt="...">
		</div>
		<div class="card d-inline-block m-1" style="width:18rem;">
			<img src="<?php echo url_for('web/images/megalodon.jpg'); ?>" class="card-img-top" alt="...">
		</div>
		 -->
	</div>
	
	
</div>
<?php include(SHARED_PATH . '/web_footer.php'); ?>
