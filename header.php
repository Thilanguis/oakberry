<header id="menu">
    <a class="itensMenu" id="home" href="index.php">
        <li class="itensMenu">Home</li>
    </a>
    <a class="itensMenu" href="formCadastroFranquiados.php">
        <li class="itensMenu">Cadastro</li>
    </a>
    <img id="logo" src="img/oak-retina.png" alt="">

    <?php if(isset($_SESSION["login"]) && isset($_SESSION["statusEmail"])){
     if($_SESSION["login"] == true && $_SESSION["statusEmail"] == "1") {?>
    <a class="itensMenu" href="franqueadoLogado.php">
        <li class="itensMenu">Menu</li>
    </a>
    <?php }
}

    else { ?>
    <a class="btn-none itensMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <li class="itensMenu">Login</li>
    </a>
    <?php } ?>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <form method="post" action="Session.php" class="px-4 py-3">
            <h5>Login franqueados</h5>
            <hr>
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Usuário</label>
                <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="" name="login" value="<?php
                if(isset($_GET["login"]))
                {
                 echo $msg = $_GET["login"]; }  ?>">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="" name="senha" value="<?php
                if(isset($_GET["senha"]))
                {
                 echo $msg = $_GET["senha"]; }  ?>">
            </div>
            <div id="loginFranqueados">
                <button type="submit" class="btn btn-outline-dark">Entrar</button>
                <?php
                if(isset($_GET["msgLogin"]))
                { ?>
                <div class="alert alert-danger animated zoomIn container" role="alert" style="width: 200px; text-align: center; padding: 0; margin-bottom: 0; margin-top: 10px;">
                    <?php echo $msg = $_GET["msgLogin"]; ?>
                </div> <?php } ?>
            </div>
        </form>
        <div class="dropdown-divider"></div>
    </div>
    <a class="itensMenu" href="administrador.php">
        <li class="itensMenu">Administrador</li>
    </a>
</header>
