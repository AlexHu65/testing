    <?php

//Iniciamos la sesion
    session_start();
//Declaramos un array vacio donde guardaremos todos los servicios
    $arrayServices = array();

// Verifico si existe la variable enviada y la variable de sesion //
    if (isset($_SESSION['services'])) {
        if (isset($_POST['service2'])) {

            $service = $_POST['service2'];
            array_push($_SESSION['services'], $service);
        } else {
            // unset($_SESSION['services']);
        }
    } else {
        if (isset($_POST['service2'])) {

            $service2 = $_POST['service2'];
            $arrayServices = array($service2);
            $_SESSION['services'] = $arrayServices;
        } else {
            echo 'No se ha enviado nada';
            // unset($_SESSION['services']);
        }
    }


    if (isset($_POST['reload'])) {
        $postReload = $_POST['reload'];
        if (isset($postReload) != 0) {

            unset($_SESSION['services']);
        } else {

            echo 'Ha ocurrido un error';
        }
    }

    if (isset($_POST['remove'])) {
// Llave que viene desde addService.js

        echo $valueServ = $_POST['remove'];
        $arrayServices2 = $_SESSION['services'];
        $clave = array_search($valueServ, $arrayServices2);

        unset($_SESSION['services'][$clave]);
    }

    if (isset($_SESSION['services'])) {
        foreach ($_SESSION['services'] as $service) {

            echo '<br>El servicio:  ' . $service . ' esta almacenado <br>';
        }
    }
   




















