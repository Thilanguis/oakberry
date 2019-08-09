<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon-oak.png" type="image/x-icon" />
    <title>OakBerry Açaí!</title>
    <!--font da google-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <?php
    include_once 'head.php';
    ?>

    <link rel="stylesheet" href="css/styleAdministrador.css">

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div class="container">

        <h2>Relação de franqueados</h2>


        <form action="administrador.php" method="get">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6 ">
                    <div class="" id="multiCollapseExample1">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                            <input type="text" id="txt_consulta" placeholder="Pesquise um franqueado" class="form-control" name="nome">
                            <button id="btnBuscaPaciente" class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php
            
            if(isset($_GET["nome"]))
            {
                $nome = $_GET["nome"]; 
                
                include_once 'conexaoComBanco.php';
                
                $sql = "select nomePrimeiroFranqueado from contatofraqueado where nomePrimeiroFranqueado like '".$nome."%' asc";
                
                $result = mysqli_query($con, $sql);
                
                $totalRegistros = mysqli_num_rows($result);
                
                if($totalRegistros > 0)
                { ?>
        <div class="table-overflow">
            <table id="tabelaConsultaPaciente" class="table table-dark table-striped container animated zoomIn">
                <tr>
                    <th><i class="fas fa-address-card" style="color: #E8850C"></i></th>
                    <th style="color: #E8850C">Nome</th>
                    <th style="color: #E8850C">Telefone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th style="color: #E8850C">Endereço</th>
                    <th style="color: #E8850C">Data de cadastramento</th>
                    <th style="color: #E8850C">Editar Paciente</th>
                    <th style="color: #E8850C">Excluir Paciente</th>
                </tr>



                <?php
                    
                echo "<p style='margin: 0px; padding: 0px;'><b>Legenda:&nbsp;</b> <i class='fas fa-book' style='color: #E8850C'></i> Paciente sem Dieta";
                echo "<p style='margin: 0px; padding: 0px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fas fa-book-open' style='color: #E8850C'></i> Paciente com Dieta</b>";
                    
                    while($row = mysqli_fetch_array($result))
                    { 
                        echo "<tr>";
                        
                        $sql2 = "select ID_CLIENTE from alimentos where id_cliente =".$row["id_cliente"];
                    
                $result2 = mysqli_query($con, $sql2);
                
                $totalRegistros2 = mysqli_num_rows($result2);
                        if ($totalRegistros2 > 0 ){
                            echo "<td><i class='fas fa-book-open' title='Paciente já tem consulta' style='color: #E8850C'></i></td>";
                        }
                        else {
                        echo "<td><a href='#' onclick='iniciarDieta(".$row["id_cliente"].")'> <i class='fas fa-book' title='Iniciar consulta' style='color: #E8850C'></i></td>";
                        }
                        
                
                $sql1 = "select ID_CLIENTE from alimentos where id_cliente =".$row["id_cliente"];
                    
                $result1 = mysqli_query($con, $sql1);
                
                $totalRegistros1 = mysqli_num_rows($result1);
                        
                        if ($totalRegistros1 > 0) {echo "<td id='consultandoDietaPacienteJaFeita'><a id='consultandoDietaPacienteJaFeita' href='#' onclick='consultarDieta(".$row["id_cliente"].")'><i id='consultandoDietaPacienteJaFeita'>".$row["nome"]."</i></td>";}
                        else{
                        echo "<td>".$row[1]."</td>";}
                        echo "<td>".$row["telefone"]."</td>";
                        echo "<td>".$row["endereco"]."</td>";
                        echo "<td>".date('d-m-Y H:i:s', strtotime($row["registro"]))."</td>";
                        echo "<td><a href='form-editarPacienteNovo.php?id_paciente=".$row["id_cliente"]."'><img src='img/icons8-editar-vários-128.png' alt='' style='padding-left: 15px; padding-top: 12px; width; 45px; height: 45px;'></td>";
                        echo "<td><a href='#' onclick='excluir(".$row["id_cliente"].")'><img src='img/icons8-lixo-30.png' style='padding-left: 17px; padding-top: 12px;' alt=''></td>";
                        echo "</tr>";
                    } ?>
            </table>
        </div>
        <?php } 
                else
                {
                    ?>
        <div id="msgErro1" class="alert alert-danger" role="alert">
            Nenhum registro encontrado
        </div>
        <?php  
                }
            }
        ?>

    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
