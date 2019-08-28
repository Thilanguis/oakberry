<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon-oak.png" type="image/x-icon" />
    <title>OakBerry Açaí!</title>
    <!--font da google-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <?php
    session_start();
    include_once 'head.php';
    include_once 'funcoesProjeto.php';
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

                <div class="form-group col-md-5">
                    <label for="inputCity">Franqueado<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="franqueado" name="franqueado" value="<?php
                if(isset($_GET["franqueado"]))
                {
                 echo $msg = $_GET["franqueado"]; }  ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">E-mail<div id="asteristico">*</div></label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php
                if(isset($_GET["email"]))
                {
                 echo $msg = $_GET["email"]; }  ?>">
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
                <script>
                    $("#telefone, #celular").mask("(00) 00000-0000");

                </script>

                <div class="form-group col-md-3">
                    <label for="inputZip">Celular<div id="asteristico">*</div></label> <img id="adicionar" class="adicionar" src="img/icons8-adicionar-48.png" alt=""> <img id="remover" class="remover" src="img/icons8-menos-64.png" alt="">
                    <input type="text" class="phone_with_ddd form-control" maxlength="11" title="Digitar seu telefone celular com DDD sem usar caracteres especiais" id="telefone" name="telefone" value="<?php 
                if(isset($_GET["telefone"]))
                {
                 echo $msg = $_GET["telefone"]; }  ?>">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-5">
                    <label class="franqueado">Outro franqueado</label>
                    <input class="franqueado form-control" id="outroFranqueado" name="outroFranqueado" value="<?php
                if(isset($_GET["outroFranqueado"]))
                {
                 echo $msg = $_GET["outroFranqueado"]; }  ?>">
                </div>

                <div class="form-group col-md-4">
                    <label class="franqueado" for="">E-mail</label>
                    <input class="franqueado form-control" id="outroEmail" name="outroEmail" value="<?php
                if(isset($_GET["outroEmail"]))
                {
                 echo $msg = $_GET["outroEmail"]; }  ?>">
                </div>

                <div class="form-group col-md-3">
                    <label class="franqueado" for="">Celular</label>
                    <input class="franqueado form-control" id="outroTelefone" name="outroTelefone" value="<?php 
                if(isset($_GET["outroTelefone"]))
                {
                 echo $msg = $_GET["outroTelefone"]; }  ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputState">Nome de usuário<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="nomeDeUsuario" name="nomeDeUsuario" value="<?php
                if(isset($_GET["nomeDeUsuario"]))
                {
                 echo $msg = $_GET["nomeDeUsuario"]; }  ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">Nome da loja<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="nomeDaLoja" placeholder="" name="nomeDaLoja" value="<?php
                if(isset($_GET["nomeDaLoja"]))
                {
                 echo $msg = $_GET["nomeDaLoja"]; }  ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputAddress">Senha<div id="asteristico">*</div></label>
                    <input type="password" class="form-control" id="inauguracao" placeholder="" name="senha" value="<?php
                if(isset($_GET["senha"]))
                {
                 echo $msg = $_GET["senha"]; }  ?>">
                </div>

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
