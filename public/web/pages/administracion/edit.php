<?php require_once('../../../../private/initialize.php'); ?>
<?php $page_title = 'Administracion'; ?>
<?php include(SHARED_PATH . '/header_admin.php'); ?>

<?php 
    // Traemos a la pelicula
    $id = $_GET['id'];
    $movie = find_pelicula_by_id($id);

    // Toda la chamba de editar
    if (is_post_request()) {
        $ruta_image = '../../images/' . $_FILES['imagen']['name'];

        $pelicula = [];
        $pelicula['id'] = $id;
        $pelicula['nombre'] = $_POST['nombre'];
        $pelicula['genero'] = $_POST['genero'];
        $pelicula['idioma'] = $_POST['idioma'];
        $pelicula['duracion'] = $_POST['duracion'];
        $pelicula['clasificacion'] = $_POST['clasificacion'];
        $pelicula['funcion'] = $_POST['funcion'];
        $pelicula['imagen'] = $ruta_image;
        
        update_pelicula($pelicula);
        redirect_to(url_for('web/pages/administracion/show.php?id=' . $id));
        
    }
?>

<div class="container"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow-lg p-5">
                <a class="back-link" href="<?php echo url_for('/web/pages/administracion/peliculas.php'); ?>">&laquo; Back to List</a>
                <h2 class="text-primary">Registrar pelicula</h2>
                <p class="mute">En el siguiente apartado podra editar la informac&oacute;n de la pelicula</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="genero">Genero</label>
                            <input type="text" class="form-control" name="genero" value="<?php echo $movie['genero']; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="idioma">Idioma</label>
                            <input type="text" class="form-control" name="idioma" value="<?php echo $movie['idioma']; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="Duracion">Duraci&oacute;n</label>
                            <input type="text" class="form-control" name="duracion" value="<?php echo $movie['duracion']; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $movie['nombre']; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="clasificacion">Clasificac&oacute;n</label>
                            <input type="text" class="form-control" name="clasificacion" value="<?php echo $movie['clasificacion']; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="funcion">Funci&oacute;n</label>
                            <input type="text" class="form-control" name="funcion" value="<?php echo $movie['funcion']; ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="imagen"><b>Portada: </b></label>
                            <input type="file" name="imagen" value="<?php echo $movie['imagen']; ?>" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <hr>
                            <button type="submit" class="btn btn-outline-primary float-right">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/web_footer.php'); ?>