<?php require_once('../../../../private/initialize.php'); ?>
<?php $page_title = 'Administracion'; ?>
<?php include(SHARED_PATH . '/header_admin.php'); ?>
<?php 
  if(isset($_GET['id'])){
      $id = $_GET['id'];
      $pelicula = find_pelicula_by_id($id);
  }

?>

<div class="container my-5">
    <div class="row col-sm-12">
        <div class="card p-5 shadow-lg">
            <a class="back-link" href="<?php echo url_for('/web/pages/administracion/peliculas.php'); ?>">&laquo; Back to List</a>
            <h2 class="text-primary">Informaci&oacute;n sobre <i><?php echo $pelicula['nombre']; ?></i></h2>
            <aside id="info">
                <p class="lead"><b>Descripcion: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus inventore doloribus mollitia voluptatem dolore magnam, beatae iure velit reprehenderit? Totam aut nostrum omnis illum delectus. Vel, cupiditate? Corrupti, molestiae eligendi.</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b><?php echo 'Nombre';?></b></td>
                            <td><?php echo $pelicula['nombre'] ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo 'Genero';?></b></td>
                            <td><?php echo $pelicula['genero'] ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo 'Idioma';?></b></td>
                            <td><?php echo $pelicula['idioma'] ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo 'Duraci&oacute;n';?></b></td>
                            <td><?php echo $pelicula['duracion'] ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo 'Funci&oacute;n';?></b></td>
                            <td><?php echo $pelicula['funcion'] ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo 'Portada';?></b></td>
                            <td><img src="<?php echo $pelicula['imagen']; ?>" alt=""></td>
                        </tr>
                       
                    </tbody>
                </table>
            </aside>
            
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/web_footer.php'); ?>