<?php include_once 'verificaLogin.php'; ?>
<div class="tabelaBlacklist animated zoomIn">

    <div class="">
        <h4>Relação de blacklist</h4>

        <?php
        include_once 'conexaoComBanco.php';
        
        $idFranqueados = $_SESSION["idFranqueado"];
        
        $sql = "SELECT * FROM colaboradores where idFranqueados = '".$idFranqueados."' and blacklist = '1'";
        
        $result = mysqli_query($con, $sql);
        
        $registro = mysqli_num_rows($result);
        
        ?>

        <table class="table table-hover">
            <thead>
                <tr>

                    <th scope="col" class="bg-danger">Nome</th>
                    <th scope="col" class="bg-danger">CPF</th>
                    <th scope="col" class="bg-danger">RG</th>
                    <th scope="col" class="bg-danger">Admissão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col" class="bg-danger">Demissão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col" class="bg-danger">Nome da mãe</th>
                    <th scope="col" class="bg-danger">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)){ 
                echo "<tr class='table-danger'>";
                    echo "<td>".$row["nomeCompleto"]."</td>";
                    echo "<td>".$row["cpf"]."</td>";
                    echo "<td>".$row["rg"]."</td>";
                    echo "<td>".date('d-m-Y', strtotime($row["dataAdmissao"]))."</td>";
                    echo "<td>".$row["dataDemissao"]."</td>";
                    echo "<td>".$row["nomeDaMae"]."</td>";
                    echo "<td onclick='adicionarBlacklist(".$row["id"].")' style='text-align: center'><a href='#'><i class='fas fa-trash-alt'></i></a></td>";
               echo "</tr>";

                 } ?>
            </tbody>
        </table>

    </div>
</div>
