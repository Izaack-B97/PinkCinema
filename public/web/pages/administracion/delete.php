<?php require_once('../../../../private/initialize.php'); ?>
<?php $page_title = 'Administracion'; ?>
<?php include(SHARED_PATH . '/header_admin.php'); ?>

<?php 
    $id = $_GET['id'];
    $pelicula = find_pelicula_by_id($id);
    if (is_post_request()) {
        delete_pelicula($id);
    }   
?>

<div class="container"> 
    <div class="row">
        <div class="col-sm-12">
            <!-- START LOGOUT -->
            <?php include(SHARED_PATH . '/logout.php'); ?>
            <!-- END LOGOUT -->
            <div class="card shadow-lg p-5">
                <a class="back-link" href="<?php echo url_for('/web/pages/administracion/peliculas.php'); ?>">&laquo; Back to List</a>
                <h2 class="text-primary">Registrar pelicula</h2>
                <p class="lead">En el siguiente apartado podra eliminar una pelicula</p>
                <small class="text-danger h4 text-center"><b>¿Esta seguro de querer eliminar <?php echo $pelicula['nombre']; ?>?</b></small>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Confirmo mi acci&oacute;n</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/web_footer.php'); ?>