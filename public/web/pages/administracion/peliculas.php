<?php require_once('../../../../private/initialize.php'); ?>
<?php $page_title = 'Administracion'; ?>
<?php include(SHARED_PATH . '/header_admin.php'); ?>

<?php
    $peliculas = find_all_peliculas();
?>

<div id="container-administracion" class="container p-5">
    <!-- START LOGOUT -->
    <?php include(SHARED_PATH . '/logout.php'); ?>
    <!-- END LOGOUT -->
    <div class="card p-5 shadow">
        <h1 class="text-primary"><?php echo 'Administraci&oacute;n'; ?>
            <a class="btn btn-primary float-right text-white" role='button' href="<?php echo url_for('/web/pages/administracion/new.php'); ?>">Registrar pelicula</a>
        </h1>
        <p class="lead">En este apartado podra realizar diferentes acciones para el cat&aacute;logo de peliculas</p>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Duraci&oacute;n</th>
                <th scope="col">Clasificacion</th>
                <th scope="col" class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($pelicula = mysqli_fetch_assoc($peliculas)){ ?>
                    <tr>
                        <td><?php echo $pelicula['id']; ?></td>
                        <td><?php echo $pelicula['nombre']; ?></td>
                        <td><?php echo $pelicula['duracion']; ?></td>
                        <td><?php echo $pelicula['clasificacion']; ?></td>
                        <td class="text-right">
                            <a href="<?php echo url_for('/web/pages/administracion/show.php?id=' . h($pelicula['id'])); ?>">Ver</a>
                            <a href="<?php echo url_for('/web/pages/administracion/edit.php?id=' . h($pelicula['id'])); ?>">Editar</a>
                            <a href="<?php echo url_for('/web/pages/administracion/delete.php?id=' . h($pelicula['id'])); ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>






<?php include(SHARED_PATH . '/web_footer.php'); ?>