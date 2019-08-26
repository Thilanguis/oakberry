<?php include_once 'verificaLogin.php'; ?>

<div class="modal fade bd-example-modal-lg" id="leitorNotaFalsa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <link rel="stylesheet" href="css/styleModalUniforme.css">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div id="uniformes">
                    <h4 style="margin-left: 293px; margin-bottom: 50px;">Leitor nota falsa</h4>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

            <h5 style="text-align: center; margin-top: 5px; margin-bottom: 40px;">Usuário: <?php
                
                include_once 'conexaoComBanco.php';
                
                
                
                $sql = "select * from franqueados where id=".$_SESSION["idFranqueado"];
                
                $result = mysqli_query($con, $sql);
                
                $row = mysqli_fetch_array($result);
                
                ?><i><?php echo $row["nomeDeUsuario"]; ?></i><?php 
                ?></h5>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="margin-left: 70px;">Leitor de nota falsa</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <?php echo "<button class='btn btn-primary' type='submit'>Enviar</button>" ?>
            </div>
        </div>
    </div>
</div>
