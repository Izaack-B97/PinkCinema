<?php require_once('../../../../private/initialize.php'); ?>
<?php $page_title = 'Administracion'; ?>
<?php include(SHARED_PATH . '/header_admin.php'); ?>

<div class="container"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow-lg p-5">
                <a class="back-link" href="<?php echo url_for('/web/pages/administracion/peliculas.php'); ?>">&laquo; Back to List</a>
                <h2 class="text-primary">Registrar pelicula</h2>
                <p class="mute">En el siguiente apartado podra registrar una nueva pelicula</p>
                <form action="create.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="genero">Genero</label>
                            <input type="text" class="form-control" name="genero" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="idioma">Idioma</label>
                            <input type="text" class="form-control" name="idioma" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="Duracion">Duraci&oacute;n</label>
                            <input type="text" class="form-control" name="duracion" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="clasificacion">Clasificac&oacute;n</label>
                            <input type="text" class="form-control" name="clasificacion" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="funcion">Funci&oacute;n</label>
                            <input type="text" class="form-control" name="funcion" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="imagen"><b>Portada: </b></label>
                            <input type="file" name="imagen" required>
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