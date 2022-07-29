
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
            <h1 class="titulo">Mi galeria</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'] ?>">
                        <img src="fotos/<?php echo $foto['imagen'] ?>" alt="<?php echo $foto['titulo'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="paginacion">
            <?php if ($pagina_actual > 1) : ?>
                <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina anterior </a>
            <?php endif ?>
            <?php if ($total_paginas != $pagina_actual) : ?>
                <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha"> Pagina siguiente <i class="fa fa-long-arrow-right"></i></a>
            <?php endif ?>
        </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Esta galeria fue creada por Pablo Rumualdo como practica con PHP</p>
    </footer>
</body>

</html>