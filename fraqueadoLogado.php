<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>OakBerry Açaí!</title>
    <!--font da google-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <?php
    include_once 'head.php';
    ?>

    <link rel="stylesheet" href="css/styleFranqueadoLogado.css">

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div class="container">

        <?php 
        include_once 'menuLateralFranqueados.php';
        ?>

        <h2>Bem-vindo</h2>

        <div id="inputWhatsapp" class="form-group inputWhatsapp">
            <label class="inputWhatsapp" for="exampleFormControlTextarea1">Envíenos sua dúvida</label> <i class="fas fa-times"></i>
            <textarea class="form-control inputWhatsapp" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
