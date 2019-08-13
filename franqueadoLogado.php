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
    include_once 'verificaLogin.php';
    ?>

    <link rel="stylesheet" href="css/styleFranqueadoLogado.css">

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div id="logout"><a href="#"><img title="Deslogar" onclick="deslogarDoSistema();" src="img/icons8-exportar-48.png" alt=""></a></div>

    <div class="container">

        <h2>Bem-vindo,
            <?php echo $_SESSION["nome"];
            if($_SESSION["segundoNome"] == true){
                echo " e ", $_SESSION["segundoNome"];
            } 
             ?>
            !</h2>

        <input id="bemVindo" type="hidden" value="<?php echo $_SESSION["nome"] ?>">

        <?php include_once 'menuLateralFranqueados.php'; ?>

        <?php include_once 'pedidosFranqueados.php' ?>

        <?php include_once 'editarFranqueados.php'; ?>

        <?php include_once 'whatsappFranqueados.php'; ?>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
