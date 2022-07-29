<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c58eff1183.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="views/style.css">
    <title>Galeria</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">
            <label for="titulo">Titulo de tu foto</label>
            <input type="text" id="titulo" name="titulo">
            <label for="texto">Descripcion de tu foto</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
            <?php if(isset($error)): ?>
                <p class="error"> <?php echo $error;?> </p>
            <?php endif ?>
            <input type="submit" value="Subir" class="submit">
        </form>
    </div>

    <footer>
        <p class="copyright">Esta galeria fue creada por Pablo Rumualdo como practica con PHP</p>
    </footer>