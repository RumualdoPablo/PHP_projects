<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c58eff1183.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/style.css">
    <title>Registro de usuario</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Registro</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i>
                <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i>
                <input type="password" name="password" class="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i>
                <input type="password" name="password2" class="password_btn" placeholder="Repita la contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <?php if(!empty($errores)) :?>
                <div class="error">
                    <ul>
                        <?php echo $errores?>
                    </ul>
                </div>
            <?php endif ?>
        </form>

        <p class="texto-registrate">
            ¿Ya tienes cuenta?
            <a href="login.php">Iniciar sesion</a>
        </p>
    </div>
</body>

</html>