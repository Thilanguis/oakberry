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

    <div id="logout"><a href="#"><i onclick="deslogarDoSistema()" class="fas fa-sign-out-alt"></i></a></div>

    <div class="container">

        <h2>Bem-vindo,
            <?php echo $_SESSION["nome"];
             ?>
        </h2>

        <input id="bemVindo" type="hidden" value="<?php echo $_SESSION["nome"] ?>">

        <div id="sumirDiv">
            <?php
        if(isset($_GET["cadastrado"]))
                { ?>
            <div class="alert alert-success animated zoomIn container" role="alert" style="width: 300px; margin-top: 0; text-align: center; padding: 0; height: auto;">
                <?php echo $msg = $_GET["cadastrado"]; ?>
            </div> <?php }
        
       if(isset($_GET["msg"]))
                { ?>
            <div class="alert alert-danger animated zoomIn container" role="alert" style="width: 300px; margin-top: 0px; text-align: center; padding: 0; height: auto;">
                <?php echo $msg = $_GET["msg"]; ?>
            </div> <?php } ?>
        </div>

        <?php include_once 'menuLateralFranqueados.php'; ?>

        <?php include_once 'pedidosFranqueados.php'; ?>
        <?php include_once 'modalUniformes.php'; ?>
        <?php include_once 'modalKitMedidor.php'; ?>
        <?php include_once 'modalBisnaga.php'; ?>
        <?php include_once 'modalFatiadorDeBanana.php'; ?>
        <?php include_once 'modalLeitorDeNotaFalsa.php'; ?>
        <?php include_once 'modalLetrex.php'; ?>
        <?php include_once 'modalCardapioLed.php'; ?>

        <?php include_once 'ajudaFranqueados.php'; ?>

        <?php include_once 'editarFranqueados.php'; ?>

        <?php include_once 'whatsappFranqueados.php'; ?>

        <?php include_once 'formCadastroColaboradores.php' ?>

        <?php include_once 'consultarColaboradores.php' ?>

    </div>

    <?php include_once 'footer.php'; ?>

</body>

</html>
