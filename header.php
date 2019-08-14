<header id="menu">
    <a id="home" href="index.php">Home</a>
    <a href="formCadastroFranquiados.php">Cadastro</a>
    <img id="logo" src="img/oak-retina.png" alt="">

    <a class="btn-none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <form method="post" action="Session.php" class="px-4 py-3">
            <h5>Login franqueados</h5>
            <hr>
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">E-mail</label>
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
    <a href="administrador.php">Administrador</a>
</header>
