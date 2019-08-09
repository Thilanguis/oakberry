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
        
    $
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
        
     $ok = $altura != "" && $pesoAtual != "" && $pesoAtual != "0"; 
    
    $sql = "insert into a_antropometrica values(null, '".$bracoDir."','".$altura."','".$torax."','".$subescapular."','".$coxaEsq."','".$coxaDir."','".$panturrilhaEsq."','".$panturrilhaDir."','".$cintura."','".$quadril."','".$abdominalCir."','".$quadriceps."','".$pesoAtual."','".$suprailiaca."','".$tricipital."','".$abdominal."','".$antebracoEsq."','".$antebracoDir."','".$bracoEsq."',  '".$id."')";
   
     header('refresh:2,form-antropometria.php?id_cliente='.$id);
        if($ok)
{           header('refresh:2,form-antropometria.php?id_cliente='.$id);
            if(mysqli_query($con,$sql))  
    {           header('refresh:2,form-bioquiomica.php?id_cliente='.$id);
         ?>
        <div class="alert alert-success animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px; text-align: center;">
            Dados gravados com sucesso!
        </div>

        <!-- <div id="btnConfirmacao"> -->
        <?php //echo "<a href='form-bioquiomica.php?id_cliente=".$id."'><button id='btnVoltar1' type='button' class='btn btn-warning animated zoomIn' style='margin-left:48%;'>OK</button></a>" ?>
        <!-- </div> -->
        <?php
        }
        else
        {
                
         ?>
        <div class="alert alert-warning animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px; text-align: center;">
            Erro ao cadastrar contato!
        </div>

        <!-- <div id="btnConfirmacao"> -->
        <?php //echo "<a href='form-antropometria.php?id_cliente=".$id."'><button id='btnVoltar1' type='button' class='btn btn-warning animated zoomIn' style='margin-left:48%;'>OK</button></a>" ?>
        <!-- </div> -->
        <?php
        }
        }
        
        else
        {
    ?>
        <div class="alert alert-danger animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px; text-align: center;">
            Favor preencher peso e altura!
        </div>

        <!-- <div id="btnConfirmacao"> -->
        <?php //echo "<a href='form-antropometria.php?id_cliente=".$id."'><button id='btnVoltar1' type='button' class='btn btn-warning animated zoomIn' style='margin-left:48%;'>OK</button></a>" ?>
        <!-- </div> -->
        <?php
        }
       
            
        mysqli_close($con);
        ?>

    </div>
</body>

</html>
