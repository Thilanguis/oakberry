<?php
        include_once 'conexaoComBanco.php';
        
        $sql = "SELECT * FROM franqueados where statusEmail is null";
        
        $result = mysqli_query($con, $sql);
        
        $registro = mysqli_num_rows($result);
        
        ?>

<div class="card text-center col-sm-6">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">Nome da loja</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Admissão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Demissão&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Nome da mãe</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)){ 
                echo "<tr>";
                    echo "<td>".$row["nomePrimeiroFranqueado"]."</td>";
                    echo "<td>".$row["nomeDaLoja"]."</td>";
                    echo "<td>".$row["emailPrimeiroFranqueado"]."</td>";
                    //echo "<td>".date('d-m-Y', strtotime($row["dataAdmissao"]))."</td>";
                    echo "<td>".$row["emailPrimeiroFranqueado"]."</td>";
                    echo "<td>".$row["nomeDaMae"]."</td>";
               echo "</tr>";

                 } ?>
            </tbody>
        </table>

    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>
