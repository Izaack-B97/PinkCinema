<?php require_once('../../../../private/initialize.php'); ?>
<?php $page_title = 'Administracion'; ?>

<?php 
    if (is_post_request()) {
        $ruta_image = '../../images/' . $_FILES['imagen']['name'];

        $pelicula = [];
        $pelicula['nombre'] = $_POST['nombre'];
        $pelicula['genero'] = $_POST['genero'];
        $pelicula['idioma'] = $_POST['idioma'];
        $pelicula['duracion'] = $_POST['duracion'];
        $pelicula['clasificacion'] = $_POST['clasificacion'];
        $pelicula['funcion'] = $_POST['funcion'];
        $pelicula['imagen'] = $ruta_image;
        
        insert_pelicula($pelicula);

        redirect_to(url_for('web/pages/administracion/peliculas.php'));
        
    } else {

    }
?>