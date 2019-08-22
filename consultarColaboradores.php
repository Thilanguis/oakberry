<?php include_once 'verificaLogin.php'; ?>
<div class="tabelaColaboradores animated zoomIn">

    <div class="">
        <h4>Relação de colaboradores</h4>

        <?php
        include_once 'conexaoComBanco.php';
        
        $idFranqueados = $_SESSION["idFranqueado"];
        
        $sql = "SELECT * FROM colaboradores where idFranqueados = '".$idFranqueados."'";
        
        $result = mysqli_query($con, $sql);
        
        $registro = mysqli_num_rows($result);
        
        ?>

        <table class="table table-hover">
            <thead>
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Data admissão</th>
                    <th scope="col">Data demissão</th>
                    <th scope="col">Nome da mãe</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <?php
                    echo "<td>".$row["nomeCompleto"]."</td>";
                    echo "<td>".$row["cpf"]."</td>";
                    echo "<td>".$row["rg"]."</td>";
                    echo "<td>".date('d-m-Y', strtotime($row["dataAdmissao"]))."</td>";
                    echo "<td>".$row["dataDemissao"]."</td>";
                    echo "<td>".$row["nomeDaMae"]."</td>";
                    ?>
                </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
