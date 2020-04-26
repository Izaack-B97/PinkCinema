<?php

/** STAR MIS FUNCIONES ****/

function find_user_email_and_password($user){
  global $db;
  $sql = "SELECT * FROM usuarios ";
  $sql .= "WHERE username='" . $user['usuario'] . "' " ;
  $sql .= "AND contrasenia='" . $user['password'] . "' " ;
	$result_set = mysqli_query($db, $sql);
	confirm_result_set($result_set);
	$usuario = mysqli_fetch_assoc($result_set);
	mysqli_free_result($result_set);
	return $usuario;
}

function find_all_peliculas(){
  global $db;

	$sql = "SELECT * FROM peliculas ";
	$sql .= "ORDER BY nombre";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}


function find_pelicula_by_id($id){
  global $db;
  $sql = "SELECT * FROM peliculas ";
  $sql .= "WHERE id='" . $id . "' " ;
	$result_set = mysqli_query($db, $sql);
	confirm_result_set($result_set);
	$usuario = mysqli_fetch_assoc($result_set);
	mysqli_free_result($result_set);
	return $usuario;
}


function update_pelicula($pelicula) {
  global $db;

  $sql = "UPDATE peliculas SET ";
  $sql .= "nombre='" . $pelicula['nombre'] . "',";
  $sql .= "genero='" . $pelicula['genero'] . "', ";
  $sql .= "idioma='" . $pelicula['idioma'] . "',";
  $sql .= "duracion='" . $pelicula['duracion'] . "', ";
  $sql .= "clasificacion='" . $pelicula['clasificacion'] . "',";
  $sql .= "funcion='" . $pelicula['funcion'] . "',";
  $sql .= "imagen='" . $pelicula['imagen'] . "' ";
  $sql .= "WHERE id='" . $pelicula['id'] . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);
  //for UPDATE statements, $result is true/false

  if ($result) {
    return true;
  }else{
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

/** END MIS FUNCIONES ****/

function find_all_subjects(){

	global $db;

	$sql = "SELECT * FROM peliculas ";
	//$sql .= "ORDER BY position ASC";
	//echo $sql;
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}

function find_subject_by_id($id){
	global $db;

	$sql = "SELECT * FROM peliculas ";
	$sql .= "WHERE id='" . $id . "'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$subject = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $subject; //return an assoc. array

}

function has_unique_page_menu_name($nombre) {
    global $db;
    $sql = "SELECT * FROM peliculas ";
    $sql .= "WHERE nombre='" . $nombre . "' ";
    $page_set = mysqli_query($db, $sql);
    $page_count = mysqli_num_rows($page_set);
    mysqli_free_result($page_set);
    if ($page_count === 0) {
      return true;
    }
}


function find_all_pages(){
	global $db;

	$sql = "SELECT * FROM pages ";
	$sql .= "ORDER BY subject_id ASC, position ASC";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}

function insert_pelicula($pelicula){
	global $db;

  $sql = "INSERT INTO peliculas ";
  $sql .= "(nombre, genero, idioma, duracion, clasificacion, funcion, imagen) ";
  $sql .= "VALUES (";
  $sql .= "'" . $pelicula['nombre'] . "',";
  $sql .= "'" . $pelicula['genero'] . "',";
  $sql .= "'" . $pelicula['idioma'] . "',";
  $sql .= "'" . $pelicula['duracion'] . "',";
  $sql .= "'" . $pelicula['clasificacion'] . "',";
  $sql .= "'" . $pelicula['funcion'] . "',";
  $sql .= "'" . $pelicula['imagen'] . "' ";
  $sql .= ")";

  $result = mysqli_query($db, $sql);
  //for INSERT statements, $result is true/false
  if ($result) {
  	return true;
  	
  }else{
  	// INSERT failed
  	echo mysqli_error($db);
  	db_disconnect($db);
    	exit;
  }

}

function update_subject($subject, $campo) {

	global $db;


 $sql = "UPDATE peliculas SET " .$campo ."='" . $subject['campo'] . "'" . " WHERE id='" .$subject['id'] ."'" ."LIMIT 1";





    

$result = mysqli_query($db, $sql);
//for UPDATE statements, $result is true/false

if ($result) {
  return true;
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}

}



function update_subject2($subject) {

  global $db;


$sql = "UPDATE peliculas SET ";
$sql .= "nombre='" . $subject['nombre'] . "',";
$sql .= "genero='" . $subject['genero'] . "', ";
$sql .= "idioma='" . $subject['idioma'] . "',";
$sql .= "duracion='" . $subject['duracion'] . "', ";
$sql .= "clasificacion='" . $subject['clasificacion'] . "',";
$sql .= "funcion='" . $subject['funcion'] . "',";
$sql .= "imagen='" . $subject['imagen'] . "' ";
$sql .= "WHERE id='" . $subject['id'] . "' ";
$sql .= "LIMIT 1";

$result = mysqli_query($db, $sql);
//for UPDATE statements, $result is true/false

if ($result) {
  return true;
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}

}

function delete_subject($id){
global $db;

$sql = "DELETE FROM peliculas ";
  $sql .= "WHERE id= '" . $id . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  //for DELETE statements, $result is true/false

  if ($result) {
      redirect_to(url_for('/web/mostrar/index.php'));
    }else{
      //DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;

    } 

}

?>