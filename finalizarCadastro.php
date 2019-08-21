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
        
    $id                       = $_POST["id"];   
    $franqueado               = $_POST["franqueado"];
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
    $nomeDaLoja               = $_POST["nomeDaLoja"];
    $enderecoDaSede           = $_POST["enderecoDaSede"];
    $complemento              = $_POST["complemento"];
    $bairro                   = $_POST["bairro"];
    $numeroDeEndereco         = $_POST["numeroDeEndereco"];
    $cidade                   = $_POST["cidade"];
    $estado                   = $_POST["estado"];
    $cep                      = $_POST["cep"];
    $telefoneDaLoja           = $_POST["telefoneDaLoja"];
    $contaBancaria            = $_POST["contaBancaria"];
        
    $franqueados = "update franqueados set  inauguracao='".$inauguracao."', razaoSocial='".$razaoSocial."', cnpj='".$cnpj."', inscricaoEstadual='".$inscricaoEstadual."', tipoDeLoja='".$tipoDeLoja."', emailDaLoja='".$emailDaLoja."', shopping='".$shopping."', nomeDaLoja='".$nomeDaLoja."', telefoneLoja='".$telefoneDaLoja."', contaBancaria='".$contaBancaria."', nomePrimeiroFranqueado='".$franqueado."', telefonePrimeiroFranqueado='".$telefone."', nomeSegundoFranqueado='".$outroFranqueado."', emailSegundoFranqueado='".$outroEmail."', telefoneSegundoFranqueado='".$outroTelefone."', enderecoMatriz='".$enderecoDaSede."', complemento='".$complemento."', bairro='".$bairro."', numero='".$numeroDeEndereco."', cidade='".$cidade."', estado='".$estado."', cep='".$cep."' where id=".$id ;
        
        $campoVazio = $franqueado != "" && $telefone != "" && $inauguracao != "" && $razaoSocial != "" && $cnpj != "" && $inscricaoEstadual != "" && $tipoDeLoja != "" && $nomeDaLoja != "" && $emailDaLoja != "" && $enderecoDaSede != "" && $complemento != "" && $bairro != "" && $numeroDeEndereco != "" && $cidade != "" && $estado != "" && $cep != "" && $telefoneDaLoja != "" && $contaBancaria != "";
        
        //$verificandoEmailExistente = "select emailPrimeiroFranqueado from contatofranqueado";
        
        //$resultado = mysqli_query($con, $verificandoEmailExistente);
        
        //$row = mysqli_fetch_array($resultado);
        
        //$comparandoEMail = $row["emailPrimeiroFranqueado"] != $email;
        
        if($campoVazio){

            if(mysqli_query($con, $franqueados)){
                 header('location:franqueadoLogado.php?cadastrado=Cadastro finalizado com Sucesso');
                
                
                }
              else{ echo "Erro ao conectar";
                    echo mysqli_error($con);
                }
            }
            else{
                header('location:formFinalizarCadastro.php?msg=Preencher todos os campos!&franqueado='.$franqueado.'&telefone='.$telefone.'&outroFranqueado='.$outroFranqueado.'&outroEmail='.$outroEmail.'&outroTelefone='.$outroTelefone.'&inauguracao='.$inauguracao.'&razaoSocial='.$razaoSocial.'&cnpj='.$cnpj.'&inscricaoEstadual='.$inscricaoEstadual.'&tipoDeLoja='.$tipoDeLoja.'&emailDaLoja='.$emailDaLoja.'&shopping='.$shopping.'&nomeDaLoja='.$nomeDaLoja.'&enderecoDaSede='.$enderecoDaSede.'&complemento='.$complemento.'&bairro='.$bairro.'&numeroDeEndereco='.$numeroDeEndereco.'&cidade='.$cidade.'&estado='.$estado.'&cep='.$cep.'&telefoneDaLoja='.$telefoneDaLoja.'&contaBancaria='.$contaBancaria.'');
               }
            
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
