<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon-oak.png" type="image/x-icon" />
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

        <h2>Bem-vindo, </h2>

        <?php 
        include_once 'menuLateralFranqueados.php';
        ?>

        <?php include_once 'editarFranqueados.php'; ?>

        <div id="inputWhatsapp" class="form-group inputWhatsapp animated zoomIn">
            <label class="inputWhatsapp" for=""><b>Envíenos sua dúvida</b></label> <i id="xWhatsapp" class="fas fa-times"></i>
            <textarea class="form-control inputWhatsapp" id="textoWhatsapp" rows="3" name="textoWhatsapp">Olá Barbara Toste, </textarea>
            <a href="#" onclick="mensagemWhatsapp();"><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
