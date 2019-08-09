<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>
    <?php include_once 'head.php'; ?>

</head>

<body>
    <div class="">

        <?php
        
        include_once 'conexaoComBanco.php';
        
    $usuario = "user";
    $franqueado               = $_POST["franqueado"];
    $email                    = $_POST["email"];
    $telefone                 = $_POST["telefone"];
    $outroFranqueado          = $_POST["outroFranqueado"];
    $outroEmail               = $_POST["outroEmail"];
    $outroTelefone            = $_POST["outroTelefone"];
    $inauguracao              = $_POST["inauguracao"];
    $razaoSocial              = $_POST["razaoSocial"];
    $cnpj                     = $_POST["cnpj"];
    $inscricaoEstadual        = $_POST["inscricaoEstadual"];
    $tipoDeLoja               = $_POST["tipoDeLoja"];
    $emailDaLoja              = $_POST["emailDaLoja"];
    $shopping                 = $_POST["shopping"];
    $administradora           = $_POST["administradora"];
    $enderecoDaSede           = $_POST["enderecoDaSede"];
    $complemento              = $_POST["complemento"];
    $bairro                   = $_POST["bairro"];
    $numeroDeEndereco         = $_POST["numeroDeEndereco"];
    $cidade                   = $_POST["cidade"];
    $estado                   = $_POST["estado"];
    $cep                      = $_POST["cep"];
    $telefoneDaLoja           = $_POST["telefoneDaLoja"];
    $contaBancaria            = $_POST["contaBancaria"];
    
    $franqueados = "insert into franqueados (id, usuario, inauguracao, razaoSocial, cnpj, inscricaoEstadual, tipoDeLoja, shopping, administradora, telefoneLoja, contaBancaria) values(null, '".$usuario."','".$inauguracao."','".$razaoSocial."','".$cnpj."','".$inscricaoEstadual."','".$tipoDeLoja."','".$shopping."','".$administradora."','".$telefoneDaLoja."','".$contaBancaria."')";
        
    $contatoFranqueado = "insert into contatofranqueado (nomePrimeiroFranqueado, emailPrimeiroFranqueado, telefonePrimeiroFranqueado, nomeSegundoFranqueado, emailSegundoFranqueado, telefoneSegundoFranqueado) values('".$franqueado."','".$email."','".$telefone."','".$outroFranqueado."','".$outroEmail."','".$outroTelefone."')";
    
    $endereco = "insert into endereco (enderecoMatriz, complemento, bairro, numero, cidade, estado, cep) values ('".$enderecoDaSede."','".$complemento."','".$bairro."','".$numeroDeEndereco."','".$cidade."','".$estado."','".$cep."')";
        
        $campoVazio = $franqueado != "" && $email != "" && $telefone != "" && $inauguracao != "" && $razaoSocial != "" && $cnpj != "" && $inscricaoEstadual != "" && $tipoDeLoja != "" && $emailDaLoja != "" && $enderecoDaSede != "" && $complemento != "" && $bairro != "" && $numeroDeEndereco != "" && $cidade != "" && $estado != "" && $cep != "" && $telefoneDaLoja != "" && $contaBancaria != "";
        
        //$verificandoEmailExistente = "select emailPrimeiroFranqueado from contatofranqueado";
        
        //$resultado = mysqli_query($con, $verificandoEmailExistente);
        
        //$row = mysqli_fetch_array($resultado);
        
        //$comparandoEMail = $row["emailPrimeiroFranqueado"] != $email;
        if($campoVazio){
            if(mysqli_query($con, $franqueados)){
                if(mysqli_query($con, $contatoFranqueado)){
                    if(mysqli_query($con, $endereco)){
                        echo "cadastro feito com sucesso";
                    }
                    else{
                       echo "Erro ao efetuar cadastro";
                       echo mysqli_error($con);
                        }
                    }
                else{
                    }
                }
            else{
                }
            }
           else{
               echo "preencher todos os campos!";
           }
        
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
