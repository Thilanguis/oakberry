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

        $excluirColaboradores = "update colaboradores set blacklist = '1' where id=".$id;
        
        $result = mysqli_query($con, $excluirColaboradores);

            if($result){
                 header('location:franqueadoLogado.php?cadastrado=Colaborador excluido com sucesso');
                }
            
              else{ echo "Erro ao conectar";
                    echo mysqli_error($con);
                }
   
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
