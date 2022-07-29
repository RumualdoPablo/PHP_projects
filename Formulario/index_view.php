<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>

<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre..." value="<?php if(!$enviado && isset($nombre)) echo $nombre?>" class="form-control">
            <input type="text" name="correo" id="correo" placeholder="Correo..." value="<?php if(!$enviado && isset($correo)) echo $correo?>" class="form-control">
            <textarea name="mensaje" id="mensaje" placeholder="Mensaje..." value="<?php if(!$enviado && isset($mensaje)) echo $mensaje?>" class="form-control"></textarea>

            <?php if (!empty($errores)) : ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado) : ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" name="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>

</html>