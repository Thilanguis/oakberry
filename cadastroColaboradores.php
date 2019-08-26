<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Dietpro</title>
    <?php include_once 'head.php';
    session_start();?>

</head>

<body>
    <div class="">

        <?php
        
        include_once 'conexaoComBanco.php';
        
        $idFranqueados = $_SESSION["idFranqueado"];
        
        $blacklist     = "0";
        $nomeCompleto  = addslashes($_POST["nomeCompleto"]);
        $cpf           = addslashes($_POST["cpf"]);
        $rg            = addslashes($_POST["rg"]);
        $dataAdmissao  = addslashes($_POST["dataAdmissao"]);
        $nomeDaMae     = addslashes($_POST["nomeDaMae"]); 


        $colaboradores = "insert into colaboradores (id, nomeCompleto, cpf, rg, dataAdmissao, dataDemissao, nomeDaMae, idFranqueados, blacklist) values(null, '".$nomeCompleto."', '".$cpf."', '".$rg."', '".$dataAdmissao."',null , '".$nomeDaMae."', '".$idFranqueados."', '".$blacklist."')";
        
        $campoVazio = $nomeCompleto != "" && $cpf != "" && $rg != "" && $dataAdmissao != "" && $nomeDaMae != "";
        
        $verificandoCpfExistente = "select cpf from colaboradores where cpf='".$cpf."'";
        
        $verificandoCpfExistenteBlacklist = "select blacklist, cpf from colaboradores where cpf='".$cpf."' and blacklist ='1'";
        
        $result = mysqli_query($con, $verificandoCpfExistente);

        $registro = mysqli_num_rows($result);

        $row = mysqli_fetch_array($result);
        
        $result1 = mysqli_query($con, $verificandoCpfExistenteBlacklist);

        $registro1 = mysqli_num_rows($result1);

        $row1 = mysqli_fetch_array($result1);
        
if($registro1 == 0){    
    if($registro == 0) {
            if($campoVazio){
                if(mysqli_query($con, $colaboradores)){
                     header('location:franqueadoLogado.php?cadastrado=Colaborador adicionado com sucesso');
                    }

                  else{ echo "Erro ao conectar";
                        echo mysqli_error($con);
                    }
                }

                else{
                    header('location:franqueadoLogado.php?msg=Preencher todos os campos!&nomeCompleto='.$nomeCompleto.'&cpf='.$cpf.'&rg='.$rg.'&dataAdmissao='.$dataAdmissao.'&nomeDaMae='.$nomeDaMae.'');
                   }
                }
    
     
    else{
    header('location:franqueadoLogado.php?msg=CPF já cadastrado!&nomeCompleto='.$nomeCompleto.'&cpf='.$cpf.'&rg='.$rg.'&dataAdmissao='.$dataAdmissao.'&nomeDaMae='.$nomeDaMae.'');
    echo "Nome de usuário já existe!";
    }   
}
else{
    header('location:franqueadoLogado.php?msg=CPF na blacklist!&nomeCompleto='.$nomeCompleto.'&cpf='.$cpf.'&rg='.$rg.'&dataAdmissao='.$dataAdmissao.'&nomeDaMae='.$nomeDaMae.'');
    echo "Nome de usuário já existe!";
}
        
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
