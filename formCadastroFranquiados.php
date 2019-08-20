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
    include_once 'funcoesProjeto.php';
    session_start();
    ?>

    <link rel="stylesheet" href="css/styleCadastro.css">

    <script type="text/javascript" src="js/jquery.mask.min.js"></script>

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div class="container" id="cadastro">

        <div id="sumirDiv">
            <?php
        if(isset($_GET["cadastrado"]))
                { ?>
            <div class="alert alert-success animated zoomIn container" role="alert" style="width: 300px; margin-top: 10px; text-align: center; padding: 0;">
                <?php echo $msg = $_GET["cadastrado"]; ?>
            </div> <?php }
        
       if(isset($_GET["msg"]))
                { ?>
            <div class="alert alert-danger animated zoomIn container" role="alert" style="width: 300px; margin-top: 10px; text-align: center; padding: 0;">
                <?php echo $msg = $_GET["msg"]; ?>
            </div> <?php } ?>
        </div>

        <h4>Cadastro de franqueados</h4>
        <form method="post" action="cadastrarFranqueados.php">

            <div class="form-row">
                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputState">Nome de usuário<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="nomeDeUsuario" name="nomeDeUsuario" value="<?php
                if(isset($_GET["nomeDeUsuario"]))
                {
                 echo $msg = $_GET["nomeDeUsuario"]; }  ?>">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputState">E-mail<div id="asteristico">*</div></label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php
                if(isset($_GET["email"]))
                {
                 echo $msg = $_GET["email"]; }  ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">Senha<div id="asteristico">*</div></label>
                    <input type="password" class="form-control" id="inauguracao" placeholder="" name="senha" value="<?php
                if(isset($_GET["senha"]))
                {
                 echo $msg = $_GET["senha"]; }  ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">Confirmar senha<div id="asteristico">*</div></label>
                    <input type="password" class="form-control" id="razaoSocial" placeholder="" name="confirmarSenha" value="<?php
                if(isset($_GET["confirmarSenha"]))
                {
                 echo $msg = $_GET["confirmarSenha"]; }  ?>">
                </div>
            </div>

            <div id="campos">
                <p>* Campos obrigatórios</p>
            </div>

            <div id="btnCadastrarFraquiados">
                <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
            </div>
        </form>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
