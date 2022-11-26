<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script defer src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>
    <div class="container">
    <form class="g-3 p-5 needs-validation d-grid justify-content-center" action="login.php" method="POST">
        <!--User-->
        <div class="row">
            <label for="validationCustom01" class="form-label">User</label>
            <input type="text" class="form-control" name="usuario" id="validationCustom01" value="" required>
            <div class="invalid-feedback">
                incorrect User
            </div>
        </div>
        <!--Paswword-->
        <div class="row">
            <label for="validationCustom02" class="form-label">Password</label>
            <input type="password" class="form-control" name="contra" id="validationCustom02" value="" required>
            <div class="invalid-feedback">
                incorrect password
            </div>
        </div>
        <!--Submit-->
        <br>
        <div class="row">
            <button class="btn btn-primary" type="submit" name="enviar">Iniciar</button>
        </div>
    </form>
    </div>
    
</body>

</html>