<?php
     session_start();


    if("user"!=$_SESSION["usuario"] && "1"!=$_SESSION["statusEmail"]) 
    {
       
        
     header('location:index.php');
        exit(); 
    }

    else{
         
    include_once 'conexaoComBanco.php';

    $sql = "select * from franqueados where id=".$_SESSION["idFranqueado"];

    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_array($result);

    $franqueado             = $row["nomePrimeiroFranqueado"];  
    $email                  = $row["emailPrimeiroFranqueado"];  
    $telefone               = $row["telefonePrimeiroFranqueado"];
    $inauguracao            = $row["inauguracao"];
    $razaoSocial            = $row["razaoSocial"];
    $cnpj                   = $row["cnpj"];
    $inscricaoEstadual      = $row["inscricaoEstadual"];
    $tipoDeLoja             = $row["tipoDeLoja"];
    $nomeDaLoja             = $row["nomeDaLoja"];
    $emailDaLoja            = $row["emailDaLoja"];
    $enderecoDaSede         = $row["enderecoMatriz"];
    $complemento            = $row["complemento"];
    $bairro                 = $row["bairro"];
    $numeroDeEndereco       = $row["numero"];
    $cidade                 = $row["cidade"];
    $estado                 = $row["estado"];
    $cep                    = $row["cep"];
    $telefoneDaLoja         = $row["telefoneLoja"];
    $contaBancaria          = $row["contaBancaria"];
        
        $campoVazio = $franqueado != "" && $email != "" && $telefone != "" && $inauguracao != "" && $razaoSocial != "" && $cnpj != "" && $inscricaoEstadual != "" && $tipoDeLoja != "" && $nomeDaLoja != "" && $emailDaLoja != "" && $enderecoDaSede != "" && $complemento != "" && $bairro != "" && $numeroDeEndereco != "" && $cidade != "" && $estado != "" && $cep != "" && $telefoneDaLoja != "" && $contaBancaria != "";
        if($campoVazio != true)
            header("location: formFinalizarCadastro.php");
    }
?>
