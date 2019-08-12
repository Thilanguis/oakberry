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
                
                $sql = "select * from contatofranqueado inner join franqueados inner join endereco where nomePrimeiroFranqueado like '".$nome."%' ";
                
                $result = mysqli_query($con, $sql);
                
                $totalRegistros = mysqli_num_rows($result);
                
                echo $totalRegistros;
                
                if($totalRegistros > 0)
                { ?>
        <div class="table-overflow">
            <table id="" class="table table-dark table-hover animated zoomIn">
                <tr>
                    <th class="1" style="color: #E8850C">Franqueado</th>
                    <th class="2" style="color: #E8850C">Email</th>
                    <th class="3" style="color: #E8850C">Telefone</th>
                    <th class="4" style="color: #E8850C">Inauguração</th>
                    <th class="5" style="color: #E8850C">Razão Social</th>
                    <th class="6" style="color: #E8850C">CNPJ</th>
                    <th class="7" style="color: #E8850C">Inscrição Estadual</th>
                    <th class="8" style="color: #E8850C">Tipo de loja</th>
                    <th class="9" style="color: #E8850C">Email da loja</th>
                    <th class="10" style="color: #E8850C">Shopping</th>
                    <th class="11" style="color: #E8850C">Administradora</th>
                    <th class="12" style="color: #E8850C">Endereço da Sede</th>
                    <th class="13" style="color: #E8850C">Complemento</th>
                    <th class="14" style="color: #E8850C">Bairro</th>
                    <th class="15" style="color: #E8850C">Número</th>
                    <th class="16" style="color: #E8850C">Cidade</th>
                    <th class="17" style="color: #E8850C">Estado</th>
                    <th class="18" style="color: #E8850C">CEP</th>
                    <th class="19" style="color: #E8850C">Telefone da loja</th>
                    <th class="20" style="color: #E8850C">Conta bancária</th>
                </tr>



                <?php
                    
                    while($row = mysqli_fetch_array($result))
                    { 
                        echo "<tr>";
                        echo "<td class='1'>".$row[1]."</td>";
                        echo "<td class='2'>".$row[2]."</td>";
                        echo "<td class='3'>".$row[3]."</td>";
                        echo "<td class='4'>".date('d-m-Y', strtotime($row[9]))."</td>";
                        echo "<td class='5'>".$row[10]."</td>";
                        echo "<td class='6'>".$row[11]."</td>";
                        echo "<td class='7'>".$row[12]."</td>";
                        echo "<td class='8'>".$row[13]."</td>";
                        echo "<td class='9'>".$row[14]."</td>";
                        echo "<td class='10'>".$row[15]."</td>";
                        echo "<td class='11'>".$row[16]."</td>";
                        echo "<td class='12'>".$row[20]."</td>";
                        echo "<td class='13'>".$row[21]."</td>";
                        echo "<td class='14'>".$row[22]."</td>";
                        echo "<td class='15'>".$row[23]."</td>";
                        echo "<td class='16'>".$row[24]."</td>";
                        echo "<td class='17'>".$row[25]."</td>";
                        echo "<td class='18'>".$row[26]."</td>";
                        echo "<td class='19'>".$row[17]."</td>";
                        echo "<td class='20'>".$row[18]."</td>";
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
