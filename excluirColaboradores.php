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
        
        echo $id = $_GET["id"];

        $excluirColaboradores = "delete from colaboradores where id=".$id;
        
        $result = mysqli_query($con, $excluirColaboradores);

            if($result){
                 header('location:franqueadoLogado.php?cadastrado=Colaborador Excluido com sucesso');
                }
            
              else{ echo "Erro ao conectar";
                    echo mysqli_error($con);
                }
   
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
