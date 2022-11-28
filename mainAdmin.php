<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclub</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>

    <div class="container p-5 justify-content-center d-grid">
        <?php
        if (isset($_SESSION['usuario'])) {
            echo "<h1 class='text-center'>Bienvenido " . $_SESSION['usuario'] . "</h1>";

            echo "<br><h3>Soportes</h3>";
            echo "<ul>";
            echo $_SESSION['soportes'];
            echo "</ul>";
            echo "<h3>Socios</h3>";
            echo "<ul>";
            echo $_SESSION['socios'];
            echo "</ul>";
        }
        ?>

    </div>

    <div class="container p-5 justify-content-center d-flex">
        <a class="btn btn-primary bg-danger" href="013logout.php" role="button">Cerrar Sesión</a>
    </div>
</body>

</html>