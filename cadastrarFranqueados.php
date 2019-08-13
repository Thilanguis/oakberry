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
    $senha                    = $_POST["senha"];
    $confirmarSenha           = $_POST["confirmarSenha"];
    
    $franqueados = "insert into franqueados (id, usuario, inauguracao, razaoSocial, cnpj, inscricaoEstadual, tipoDeLoja, emailDaLoja, shopping, administradora, telefoneLoja, contaBancaria) values(null, '".$usuario."','".$inauguracao."','".$razaoSocial."','".$cnpj."','".$inscricaoEstadual."','".$tipoDeLoja."', '".$emailDaLoja."', '".$shopping."','".$administradora."','".$telefoneDaLoja."','".$contaBancaria."')";
        
    $contatoFranqueado = "insert into contatofranqueado (id, nomePrimeiroFranqueado, emailPrimeiroFranqueado, telefonePrimeiroFranqueado, nomeSegundoFranqueado, emailSegundoFranqueado, telefoneSegundoFranqueado, senha, confirmarSenha) values(null, '".$franqueado."','".$email."','".$telefone."','".$outroFranqueado."','".$outroEmail."','".$outroTelefone."','".$senha."','".$confirmarSenha."')";
    
    $endereco = "insert into endereco (id, enderecoMatriz, complemento, bairro, numero, cidade, estado, cep) values (null, '".$enderecoDaSede."','".$complemento."','".$bairro."','".$numeroDeEndereco."','".$cidade."','".$estado."','".$cep."')";
        
        $campoVazio = $franqueado != "" && $email != "" && $telefone != "" && $inauguracao != "" && $razaoSocial != "" && $cnpj != "" && $inscricaoEstadual != "" && $tipoDeLoja != "" && $emailDaLoja != "" && $enderecoDaSede != "" && $complemento != "" && $bairro != "" && $numeroDeEndereco != "" && $cidade != "" && $estado != "" && $cep != "" && $telefoneDaLoja != "" && $contaBancaria != "" && $senha != "" && $confirmarSenha != "";
        
        //$verificandoEmailExistente = "select emailPrimeiroFranqueado from contatofranqueado";
        
        //$resultado = mysqli_query($con, $verificandoEmailExistente);
        
        //$row = mysqli_fetch_array($resultado);
        
        //$comparandoEMail = $row["emailPrimeiroFranqueado"] != $email;
        
        $conferirSenhas = $senha == $confirmarSenha;
          
        if($conferirSenhas){
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
                else{ echo 1; echo mysqli_error($con);
                    }
                }
              else{ echo 2; echo mysqli_error($con);
                }
            }
            else{
               echo "preencher todos os campos!";
               }
            }
        
          else{
              header('location:formCadastroFranquiados.php?msg="Senhas não conferem!"&franqueado='.$franqueado.'&email='.$email.'&telefone='.$telefone.'&outroFranqueado='.$outroFranqueado.'&outroEmail='.$outroEmail.'&outroTelefone='.$outroTelefone.'&inauguracao='.$inauguracao.'&razaoSocial='.$razaoSocial.'&cnpj='.$cnpj.'&inscricaoEstadual='.$inscricaoEstadual.'&tipoDeLoja='.$tipoDeLoja.'&emailDaLoja='.$emailDaLoja.'&shopping='.$shopping.'&administradora='.$administradora.'&enderecoDaSede='.$enderecoDaSede.'&complemento='.$complemento.'&bairro='.$bairro.'&numeroDeEndereco='.$numeroDeEndereco.'&cidade='.$cidade.'&estado='.$estado.'&cep='.$cep.'&telefoneDaLoja='.$telefoneDaLoja.'&contaBancaria='.$contaBancaria.'&senha='.$senha.'&confirmarSenha='.$confirmarSenha.'');
              echo "Senhas não conferem!";
          }
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
