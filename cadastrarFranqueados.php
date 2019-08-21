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
        
    $status = "user";
    $nomeDeUsuario      = addslashes($_POST["nomeDeUsuario"]);
    $email              = addslashes($_POST["email"]);
    $senha              = md5(addslashes($_POST["senha"]));
    $confirmarSenha     = md5(addslashes($_POST["confirmarSenha"]));
    
    
    $franqueados = "insert into franqueados (id, usuario, inauguracao, razaoSocial, cnpj, inscricaoEstadual, tipoDeLoja, emailDaLoja, shopping, nomeDaLoja, telefoneLoja, contaBancaria, nomePrimeiroFranqueado, emailPrimeiroFranqueado, telefonePrimeiroFranqueado, nomeSegundoFranqueado, emailSegundoFranqueado, telefoneSegundoFranqueado, senha, confirmarSenha, enderecoMatriz, complemento, bairro, numero, cidade, estado, cep, nomeDeUsuario, statusEMail) values(null,'".$status."', null, null, null, null, null, null , null ,null, null, null, null,'".$email."', null, null, null, null,'".$senha."','".$confirmarSenha."', null, null, null, null, null, null, null, '".$nomeDeUsuario."', null)";
        
        
        $campoVazio = $email != "" && $senha != "" && $confirmarSenha != "";
        
        //$verificandoEmailExistente = "select emailPrimeiroFranqueado from contatofranqueado";
        
        //$resultado = mysqli_query($con, $verificandoEmailExistente);
        
        //$row = mysqli_fetch_array($resultado);
        
        //$comparandoEMail = $row["emailPrimeiroFranqueado"] != $email;
        
        $conferirSenhas = $senha == $confirmarSenha;
        
        if($conferirSenhas){
        if($campoVazio){
            if(mysqli_query($con, $franqueados)){
                 header('location:formCadastroFranquiados.php?cadastrado=Cadastro realizado com Sucesso <br> Confirme seu cadastro no seu email');
                $id = $pdo-> mysql_insert_id();
                $md5 = md5($id);
                
                $assunto = "Confirme seu cadastro";
                $link = "confirmarCadastroEmail.php?h=".$md5;
                $mensagem = "Cliquei aqui para confirmar seu cadastro ". $link;
                $header = "From: Oakberry";
                
                mail($email, $assunto, $mensagem, $header);
                }
              else{ echo "Erro ao conectar";
                    echo mysqli_error($con);
                }
            }
            else{
                header('location:formCadastroFranquiados.php?msg=Preencher todos os campos!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'');
               }
            }
        
          else{
              header('location:formCadastroFranquiados.php?msg=Senhas não conferem!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'');
              echo "Senhas não conferem!";
          }
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
