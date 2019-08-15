<?php
    
    include_once 'head.php';
    session_start();
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    include_once 'conexaoComBanco.php';
    $sql = "select * from franqueados where emailPrimeiroFranqueado = '".$login."' and senha = '".$senha."' or emailSegundoFranqueado = '".$login."' and senha = '".$senha."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $totalRegistros = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    $campoVazio = $login != "" && $senha != "";

if ($campoVazio){
        if ($totalRegistros > 0)
        {
            $_SESSION["login"]          = $row["emailPrimeiroFranqueado"];
            $_SESSION["senha"]          = $row["senha"];
            $_SESSION["nome"]           = $row["nomePrimeiroFranqueado"];
            $_SESSION["segundoLogin"]   = $row["emailSegundoFranqueado"];
            $_SESSION["segundoNome"]    = $row["nomeSegundoFranqueado"];

            header("Location:franqueadoLogado.php");
         }
        else
        { header('refresh:2,index.php?msgLogin=Login incorreto&login='.$login.'&senha='.$senha.'');
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
    header('refresh:2,index.php?msgLogin=Campo vazio!&login='.$login.'&senha='.$senha.'');
    
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
