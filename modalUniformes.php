<?php include_once 'verificaLogin.php'; ?>

<div class="modal fade bd-example-modal-lg" id="uniformes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <link rel="stylesheet" href="css/styleModalUniforme.css">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div id="uniformes">
                    <h4 style="margin-left: 330px; margin-bottom: 50px;">Pedido de uniformes</h4>
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

            <div id="itensUniforme">
                <div class="form-row">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Boné
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-check-inline" style="margin-bottom: 10px;">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Camisa
                        </label>
                        <input style="margin-left: 40px;" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="P">
                        <label class="form-check-label" for="inlineCheckbox1" style="margin-right: 22px;">P</label>
                        <input type="number" style="max-width: 14.5% !important;">
                    </div>
                </div>
                <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="M">
                    <label class="form-check-label" for="inlineCheckbox1" style="margin-right: 19px;">M</label>
                    <input type="number" class="col-sm-1">
                </div>
                <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="G">
                    <label class="form-check-label" for="inlineCheckbox1" style="margin-right: 22px;">G</label>
                    <input type="number" class="col-1">
                </div>

                <div class="form-row">
                    <div class="form-check-inline" style="margin-bottom: 10px;">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Moletom
                        </label>
                        <input style="margin-left: 22px;" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="P">
                        <label class="form-check-label" for="inlineCheckbox1" style="margin-right: 26px;">P</label>
                        <input type="number" style="max-width: 14.5% !important;">
                    </div>
                </div>
                <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="M">
                    <label class="form-check-label" for="inlineCheckbox1" style="margin-right: 20px;">M</label>
                    <input type="number" class="col-sm-1">
                </div>
                <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="G">
                    <label class="form-check-label" for="inlineCheckbox1" style="margin-right: 22px;">G</label>
                    <input type="number" class="col-1">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <?php echo "<button class='btn btn-primary' type='submit'>Enviar</button>" ?>
            </div>
        </div>
    </div>
</div>
