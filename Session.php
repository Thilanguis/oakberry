<?php
    
    include_once 'head.php';
    session_start();
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    include_once 'conexaoComBanco.php';
    $sql = "select * from franqueados where nomeDeUsuario = '".$login."' and senha = '".$senha."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $totalRegistros = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    $campoVazio = $login != "" && $senha != "";

if ($campoVazio){
        if ($totalRegistros > 0)
        {
            if($row["usuario"] == "user" && $row["statusEmail"] == "1"){
            $_SESSION["login"]          = $row["emailPrimeiroFranqueado"];
            $_SESSION["senha"]          = $row["senha"];
            $_SESSION["nome"]           = $row["nomeDeUsuario"];
            $_SESSION["segundoLogin"]   = $row["emailSegundoFranqueado"];
            $_SESSION["segundoNome"]    = $row["nomeSegundoFranqueado"];
            $_SESSION["idFranqueado"]   = $row["id"];
            $_SESSION["usuario"]        = $row["usuario"];
            $_SESSION["statusEmail"]    = $row["statusEmail"];

            header("Location:franqueadoLogado.php");
         }
            else{
            $_SESSION["login"]          = $row["emailPrimeiroFranqueado"];
            $_SESSION["senha"]          = $row["senha"];
            $_SESSION["nome"]           = $row["nomeDeUsuario"];
            $_SESSION["segundoLogin"]   = $row["emailSegundoFranqueado"];
            $_SESSION["segundoNome"]    = $row["nomeSegundoFranqueado"];
            $_SESSION["idFranqueado"]   = $row["id"];
            $_SESSION["usuario"]        = $row["usuario"];
            $_SESSION["statusEmail"]    = $row["statusEmail"];
                header("Location:administrador.php");
            }
        }
        else
        { header('refresh:2,index.php?msgLogin=Login incorreto&login='.$login.'');
            ?>
<div class="alert alert-danger animated zoomIn container" role="alert" style="width: 200px; margin-top: 100px; text-align: center;">
    Login incorreto!
</div>

<!-- <div id="btnConfirmacao">
            <a href="index.php"><button id="btnVoltar1" type="button" class="btn btn-warning animated zoomIn" style="margin-left:48%;">OK</button></a>
        </div> -->

<?php
        }
    }
else{
    header('refresh:2,index.php?msgLogin=Campo vazio!&login='.$login.'');
    
     ?>
<div class="alert alert-danger animated zoomIn container" role="alert" style="width: 200px; margin-top: 100px; text-align: center;">
    Campo vazio!
</div>

<!-- <div id="btnConfirmacao">
            <a href="index.php"><button id="btnVoltar1" type="button" class="btn btn-warning animated zoomIn" style="margin-left:48%;">OK</button></a>
        </div> -->

<?php
    
}
?>
