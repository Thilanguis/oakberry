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
    $senha                    = $_POST["senha"];
    $confirmarSenha           = $_POST["confirmarSenha"];
    
    $franqueados = "update franqueados set  inauguracao='".$inauguracao."', razaoSocial='".$razaoSocial."', cnpj='".$cnpj."', inscricaoEstadual='".$inscricaoEstadual."', tipoDeLoja='".$tipoDeLoja."', emailDaLoja='".$emailDaLoja."', shopping='".$shopping."', administradora='".$administradora."', telefoneLoja='".$telefoneDaLoja."', contaBancaria='".$contaBancaria."', nomePrimeiroFranqueado='".$franqueado."', emailPrimeiroFranqueado='".$email."', telefonePrimeiroFranqueado='".$telefone."', nomeSegundoFranqueado='".$outroFranqueado."', emailSegundoFranqueado='".$outroEmail."', telefoneSegundoFranqueado='".$outroTelefone."', senha='".$senha."', confirmarSenha='".$confirmarSenha."', enderecoMatriz='".$enderecoDaSede."', complemento='".$complemento."', bairro='".$bairro."', numero='".$numeroDeEndereco."', cidade='".$cidade."', estado='".$estado."', cep='".$cep."' where id=".$id ;
        
        
        $campoVazio = $franqueado != "" && $email != "" && $telefone != "" && $inauguracao != "" && $razaoSocial != "" && $cnpj != "" && $inscricaoEstadual != "" && $tipoDeLoja != "" && $emailDaLoja != "" && $enderecoDaSede != "" && $complemento != "" && $bairro != "" && $numeroDeEndereco != "" && $cidade != "" && $estado != "" && $cep != "" && $telefoneDaLoja != "" && $contaBancaria != "" && $senha != "" && $confirmarSenha != "";
        
        //$verificandoEmailExistente = "select emailPrimeiroFranqueado from contatofranqueado";
        
        //$resultado = mysqli_query($con, $verificandoEmailExistente);
        
        //$row = mysqli_fetch_array($resultado);
        
        //$comparandoEMail = $row["emailPrimeiroFranqueado"] != $email;
        
        $conferirSenhas = $senha == $confirmarSenha;
          
        if($conferirSenhas){
        if($campoVazio){
            if(mysqli_query($con, $franqueados)){
                 header('location:FranqueadoLogado.php?cadastrado=Cadastro atualizado!');
                }
              else{ echo "Erro ao conectar";
                    echo mysqli_error($con);
                }
            }
            else{
                header('location:franqueadoLogado.php?msg=Preencher todos os campos!&franqueado='.$franqueado.'&email='.$email.'&telefone='.$telefone.'&outroFranqueado='.$outroFranqueado.'&outroEmail='.$outroEmail.'&outroTelefone='.$outroTelefone.'&inauguracao='.$inauguracao.'&razaoSocial='.$razaoSocial.'&cnpj='.$cnpj.'&inscricaoEstadual='.$inscricaoEstadual.'&tipoDeLoja='.$tipoDeLoja.'&emailDaLoja='.$emailDaLoja.'&shopping='.$shopping.'&administradora='.$administradora.'&enderecoDaSede='.$enderecoDaSede.'&complemento='.$complemento.'&bairro='.$bairro.'&numeroDeEndereco='.$numeroDeEndereco.'&cidade='.$cidade.'&estado='.$estado.'&cep='.$cep.'&telefoneDaLoja='.$telefoneDaLoja.'&contaBancaria='.$contaBancaria.'');
               }
            }
        
          else{
              header('location:franqueadoLogado.php?msg=Senhas não conferem!&franqueado='.$franqueado.'&email='.$email.'&telefone='.$telefone.'&outroFranqueado='.$outroFranqueado.'&outroEmail='.$outroEmail.'&outroTelefone='.$outroTelefone.'&inauguracao='.$inauguracao.'&razaoSocial='.$razaoSocial.'&cnpj='.$cnpj.'&inscricaoEstadual='.$inscricaoEstadual.'&tipoDeLoja='.$tipoDeLoja.'&emailDaLoja='.$emailDaLoja.'&shopping='.$shopping.'&administradora='.$administradora.'&enderecoDaSede='.$enderecoDaSede.'&complemento='.$complemento.'&bairro='.$bairro.'&numeroDeEndereco='.$numeroDeEndereco.'&cidade='.$cidade.'&estado='.$estado.'&cep='.$cep.'&telefoneDaLoja='.$telefoneDaLoja.'&contaBancaria='.$contaBancaria.'');
              echo "Senhas não conferem!";
          }
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
