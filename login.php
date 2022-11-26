<?php
declare(strict_types=1);
// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['contra'];

    // validamos que recibimos ambos parámetros
    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
        include_once("index.php");
    } else {
        if ($usuario == "usuario" && $password == "usuario") {
            // almacenamos el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            // cargamos la página principal
            header("Location: main.php");
        } else if ($usuario == "admin" && $password == "admin") {
            // almacenamos el usuario en la sesión
            session_start();
            include_once "index7.php";
            $_SESSION['usuario'] = $usuario;
            $_SESSION['soportes'] = $vc->listarProductos();
            $_SESSION['socios'] = $vc->listarSocios();
            // cargamos la página principal
            header("Location: mainAdmin.php");
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $error = "Usuario o contraseña no válidos!";
            include_once("index.php");
            echo "<p class='text-danger text-center'>".$error."<p>";
        }
    }
}