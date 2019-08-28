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
        $franqueado      = addslashes($_POST["franqueado"]);
        $email           = addslashes($_POST["email"]);
        $telefone        = addslashes($_POST["telefone"]);
        $outroFranqueado = addslashes($_POST["outroFranqueado"]);
        $outroEmail      = addslashes($_POST["outroEmail"]);
        $outroTelefone   = addslashes($_POST["outroTelefone"]);
        $nomeDeUsuario   = addslashes($_POST["nomeDeUsuario"]);
        $nomeDaLoja      = addslashes($_POST["nomeDaLoja"]);
        $senha           = md5(addslashes($_POST["senha"]));
        $confirmarSenha  = md5(addslashes($_POST["confirmarSenha"]));

        $franqueados = "insert into franqueados (id, usuario, inauguracao, razaoSocial, cnpj, inscricaoEstadual, tipoDeLoja, emailDaLoja, shopping, nomeDaLoja, telefoneLoja, contaBancaria, nomePrimeiroFranqueado, emailPrimeiroFranqueado, telefonePrimeiroFranqueado, nomeSegundoFranqueado, emailSegundoFranqueado, telefoneSegundoFranqueado, senha, confirmarSenha, enderecoMatriz, complemento, bairro, numero, cidade, estado, cep, nomeDeUsuario, statusEMail) values(null,'".$status."', null, null, null, null, null, null , null ,'".$nomeDaLoja."', null, null, '".$franqueado."','".$email."', '".$telefone."', '".$outroFranqueado."', '".$outroEmail."', '".$outroTelefone."','".$senha."','".$confirmarSenha."', null, null, null, null, null, null, null, '".$nomeDeUsuario."', null)";
        
        $campoVazio = $nomeDeUsuario != "" && $nomeDaLoja != "" && $franqueado != "" && $email != "" && $telefone != "" && $senha != "" && $confirmarSenha != "" && $telefone != "";
        
        $verificandoUsuarioExistente = "select nomeDeUsuario from franqueados where nomeDeUsuario='".$nomeDeUsuario."'";
        
        $verificandoEmailExistente = "select emailPrimeiroFranqueado from franqueados where emailPrimeiroFranqueado='".$email."'";
        
        $result = mysqli_query($con, $verificandoUsuarioExistente);
        
        $result1 = mysqli_query($con, $verificandoEmailExistente);
        
        $registro = mysqli_num_rows($result);
        
        $registro1 = mysqli_num_rows($result1);
        
        $row = mysqli_fetch_array($result);
        
        $conferirSenhas = $senha == $confirmarSenha;
        
        $evitandoPreenchimentoMD5 = $senha != "d41d8cd98f00b204e9800998ecf8427e" || $confirmarSenha != "d41d8cd98f00b204e9800998ecf8427e";
        
if($registro == 0) {
    if($registro1 == 0) {
        if($conferirSenhas){
            if($campoVazio){
                if($evitandoPreenchimentoMD5){
                if(mysqli_query($con, $franqueados)){
                 header('location:formCadastroFranquiados.php?cadastrado=Cadastro realizado com Sucesso!');
                /* 
                //Função mandar para email ativação do id 
                $id = $pdo-> mysql_insert_id();
                $md5 = md5($id);
                
                $assunto = "Confirme seu cadastro";
                $link = "confirmarCadastroEmail.php?h=".$md5;
                $mensagem = "Cliquei aqui para confirmar seu cadastro ". $link;
                $header = "From: Oakberry"; 
                
                mail($email, $assunto, $mensagem, $header);
                */
                }
              else{ echo "Erro ao conectar";
                    echo mysqli_error($con);
                }
            }
            else{
                header('location:formCadastroFranquiados.php?msg=Preencher campos de senha!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'&telefone='.$telefone.'&nomeDaLoja='.$nomeDaLoja.'&franqueado='.$franqueado.'');
               }
                }
            else{
                header('location:formCadastroFranquiados.php?msg=Preencher todos os campos!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'&telefone='.$telefone.'&nomeDaLoja='.$nomeDaLoja.'&franqueado='.$franqueado.'');
            }
            }
        
          else{
              header('location:formCadastroFranquiados.php?msg=Senhas não conferem!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'&telefone='.$telefone.'&nomeDaLoja='.$nomeDaLoja.'&franqueado='.$franqueado.'');
          }
        }
    else{
        header('location:formCadastroFranquiados.php?msg=E-mail já existe!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'&telefone='.$telefone.'&nomeDaLoja='.$nomeDaLoja.'&franqueado='.$franqueado.'');
    }
    }
     
else{
    header('location:formCadastroFranquiados.php?msg=Nome de usuário já existe!&email='.$email.'&nomeDeUsuario='.$nomeDeUsuario.'&telefone='.$telefone.'&nomeDaLoja='.$nomeDaLoja.'&franqueado='.$franqueado.'');
}
   
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
