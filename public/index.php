<?php 
    include './../app/config.php';
    include './../app/autoload.php';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
    <link rel="stylesheet" href="<?= URL ?>/public/css/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <div class="containerNovo">
    <?php
    include '../app/views/header.php';
    $rotas = new Rota();
    include '../app/views/footer.php';
    ?>
    </div>
    <script src="<?= URL ?>/public/js/scripts.js"></script>
</body>
</html>