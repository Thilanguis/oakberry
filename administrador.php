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

        <a href="#" class="a">Nome</a>
        <a href="#" class="b">Email</a>
        <a href="#" class="c">Telefone</a>
        <a href="#" class="d">Inauguração</a>
        <a href="#" class="e">Razão social</a>
        <a href="#" class="f">CNPJ</a>
        <a href="#" class="g">Inscrição estadual</a>
        <a href="#" class="h">Tipo de loja</a>
        <a href="#" class="i">Email da loja</a>
        <a href="#" class="j">Shopping</a>
        <a href="#" class="k">Administradora</a>
        <a href="#" class="l">Endereço da sede</a>
        <a href="#" class="m">Complemento</a>
        <a href="#" class="n">Bairro</a>
        <a href="#" class="o">Número</a>
        <a href="#" class="p">Cidade</a>
        <a href="#" class="q">Estado</a>
        <a href="#" class="r">CEP</a>
        <a href="#" class="s">Telefone da loja</a>
        <a href="#" class="t">Conta bancária</a>

        <?php
            
            if(isset($_GET["nome"]))
            {
                include_once 'conexaoComBanco.php';
                
                $nome = $_GET["nome"]; 
                
                $sql = "select * from franqueados where nomePrimeiroFranqueado like '".$nome."%' ";
                
                $result = mysqli_query($con, $sql);
                
                $totalRegistros = mysqli_num_rows($result);
                
                echo $totalRegistros;
                
                if($totalRegistros > 0)
                { ?>
        <div class="table-overflow">
            <table id="" class="table table-light table-sm table-hover animated zoomIn">
                <thead>
                    <tr>
                        <th class="1" style="color: rgba(73, 29, 86, 1); text-align: center;">Franqueado</th>
                        <th class="2" style="color:  rgba(73, 29, 86, 1); text-align: center;">Email</th>
                        <th class="3" style="color:  rgba(73, 29, 86, 1); text-align: center;">Telefone</th>
                        <th class="4" style="color:  rgba(73, 29, 86, 1); text-align: center;">Inauguração</th>
                        <th class="5" style="color:  rgba(73, 29, 86, 1); text-align: center;">Razãosocial</th>
                        <th class="6" style="color:  rgba(73, 29, 86, 1); text-align: center;">CNPJ</th>
                        <th class="7" style="color:  rgba(73, 29, 86, 1); text-align: center;">Inscrição Estadual</th>
                        <th class="8" style="color:  rgba(73, 29, 86, 1); text-align: center;">Tipo de loja</th>
                        <th class="9" style="color:  rgba(73, 29, 86, 1); text-align: center;">Email da loja</th>
                        <th class="10" style="color:  rgba(73, 29, 86, 1); text-align: center;">Shopping</th>
                        <th class="11" style="color:  rgba(73, 29, 86, 1); text-align: center;">Administradora</th>
                        <th class="12" style="color:  rgba(73, 29, 86, 1); text-align: center;">Endereço da Sede</th>
                        <th class="13" style="color:  rgba(73, 29, 86, 1); text-align: center;">Complemento</th>
                        <th class="14" style="color:  rgba(73, 29, 86, 1); text-align: center;">Bairro</th>
                        <th class="15" style="color:  rgba(73, 29, 86, 1); text-align: center;">Número</th>
                        <th class="16" style="color:  rgba(73, 29, 86, 1); text-align: center;">Cidade</th>
                        <th class="17" style="color:  rgba(73, 29, 86, 1); text-align: center;">Estado</th>
                        <th class="18" style="color:  rgba(73, 29, 86, 1); text-align: center;">CEP</th>
                        <th class="19" style="color:  rgba(73, 29, 86, 1); text-align: center;">Telefone da loja</th>
                        <th class="20" style="color:  rgba(73, 29, 86, 1); text-align: center;">Conta bancária</th>
                    </tr>
                </thead>
                <?php
                    
                    while($row = mysqli_fetch_array($result))
                    { 
                        echo "<tr>";
                        echo "<th class='1' style='text-align: center;'>".$row["nomePrimeiroFranqueado"]."</th>";
                        echo "<td class='2' style='text-align: center;'>".$row["emailPrimeiroFranqueado"]."</td>";
                        echo "<td class='3' style='text-align: center;'>".$row["telefonePrimeiroFranqueado"]."</td>";
                        echo "<td class='4' style='text-align: center;'>".date('d-m-Y', strtotime($row["inauguracao"]))."</td>";
                        echo "<td class='5' style='text-align: center;'>".$row["razaoSocial"]."</td>";
                        echo "<td class='6' style='text-align: center;'>".$row["cnpj"]."</td>";
                        echo "<td class='7' style='text-align: center;'>".$row["inscricaoEstadual"]."</td>";
                        echo "<td class='8' style='text-align: center;'>".$row["tipoDeLoja"]."</td>";
                        echo "<td class='9' style='text-align: center;'>".$row["emailDaLoja"]."</td>";
                        echo "<td class='10' style='text-align: center;'>".$row["shopping"]."</td>";
                        echo "<td class='11' style='text-align: center;'>".$row["administradora"]."</td>";
                        echo "<td class='12' style='text-align: center;'>".$row["enderecoMatriz"]."</td>";
                        echo "<td class='13' style='text-align: center;'>".$row["complemento"]."</td>";
                        echo "<td class='14' style='text-align: center;'>".$row["bairro"]."</td>";
                        echo "<td class='15' style='text-align: center;'>".$row["numero"]."</td>";
                        echo "<td class='16' style='text-align: center;'>".$row["cidade"]."</td>";
                        echo "<td class='17' style='text-align: center;'>".$row["estado"]."</td>";
                        echo "<td class='18' style='text-align: center;'>".$row["cep"]."</td>";
                        echo "<td class='19' style='text-align: center;'>".$row["telefoneLoja"]."</td>";
                        echo "<td class='20' style='text-align: center;'>".$row["contaBancaria"]."</td>";
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
