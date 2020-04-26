<?php require_once('../../private/initialize.php'); ?>
<?php 

$alert_tpl =  '<div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">';
$alert_tpl .=  '<strong>Usuario o contraseña incorrectos</strong>';
$alert_tpl .=  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
$alert_tpl .=  '<span aria-hidden="true">&times;</span>';
$alert_tpl .=  '</button></div>';

?>
<?php 


    if (is_post_request()) {
        // $user = [];
        
        // $user['usuario'] = $_POST['user'];
        // $user['password'] = $_POST['password'];
        // $usuario = find_user_email_and_password($user);

        // echo $usuario['id'];

        // Iniciamos session
        session_start();
        if (isset($_GET['cerrar_sesion'])) {
            session_unset(); // Cerramos session
            session_destroy(); // Detruimos la session
        }

        // Verificamos el rol
        if (isset($_SESSION['rol'])) {
            // assigment_rol($_SESSION['rol']);
            switch($_SESSION['rol']){
                case 1:
                  header('location: index_admin.php');
                break;
                case 2:
                  header('location: index.php');
                break;
                default:
            
            }
        }


        if (isset($_POST['user']) && isset($_POST['password'])) {
            $usuario = [];
            $usuario['usuario'] = $_POST['user'];
            $usuario['password'] = $_POST['password'];
            
            $result_usuario = find_user_email_and_password($usuario);

            if ($result_usuario) {
                $rol = $result_usuario['id_rol'];
                $_SESSION['rol'] = $rol;
                switch($_SESSION['rol']){
                    case 1:
                      header('location: index_admin.php');
                    break;
                    case 2:
                      header('location: index.php');
                    break;
                    default:
                
                  }
            } else {
                echo $alert_tpl;
            }



        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body class="container bg-light">
    <div class="row justify-content-center align-items-lg-center vh-100">
        <div class="col-sm-8">
            <div class="card shadow-lg p-5">
                <div class="row">
                    <div class="col-sm-8 offset-2">
                        <header class="mb-3">
                            <h4 class="text-primary d-inline">Login</h4>
                            <small class="d-inline float-right"><b>PinkCinema</b></small>
                        </header>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label for="user">User</label>
                                    <input type="text" class="form-control" name="user" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <button type="button" class="shadow btn btn-outline-dark float-right">Registrarse</button>
                                    <button type="submit" class="shadow btn btn-outline-primary float-right mr-2">Acceder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>