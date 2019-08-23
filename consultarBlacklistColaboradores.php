<?php include_once 'verificaADMIN.php'; ?>
<div class="tabelaBlacklist animated zoomIn">

    <div class="">
        <h4>Relação de blacklist</h4>

        <?php
        include_once 'conexaoComBanco.php';
        
        
        
        $sql = "SELECT * FROM colaboradores where blacklist = '1'";
        
        $result = mysqli_query($con, $sql);
        
        $registro = mysqli_num_rows($result);
        
        ?>

        <table class="table table-hover">
            <thead>
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Admissão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Demissão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Nome da mãe</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)){ 
                echo "<tr>";
                    echo "<td>".$row["nomeCompleto"]."</td>";
                    echo "<td>".$row["cpf"]."</td>";
                    echo "<td>".$row["rg"]."</td>";
                    echo "<td>".date('d-m-Y', strtotime($row["dataAdmissao"]))."</td>";
                    echo "<td>".$row["dataDemissao"]."</td>";
                    echo "<td>".$row["nomeDaMae"]."</td>";
               echo "</tr>";

                 } ?>
            </tbody>
        </table>

    </div>
</div>
