<?php include_once 'verificaLogin.php'; ?>

<div class="modal fade bd-example-modal-lg" id="uniformes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <link rel="stylesheet" href="css/styleModalUniforme.css">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div id="uniformes">
                    <h4 style="margin-left: 277px; margin-bottom: 50px;">Pedido de uniformes</h4>
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
            <form action="pedidoUniforme.php" method="post">
                <div id="itensUniforme">
                    <div class="form-row" style="float: left; padding-bottom: 10px;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="Boné" id="bone" name="bone" onclick="ShowHideBone(this)">
                            <label class="form-check-label" for="bone">
                                Boné
                            </label>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-check-inline" style="margin-bottom: 10px; margin-left: 97px;">
                            <div id="quantidadeBone" style="display: none;">
                                <input type="number" style="max-width: 25% !important;" name="quantidadeBone">
                            </div>
                        </div>
                    </div>


                    <!-- div de limpeza clear both -->
                    <div id="limpeza"></div>

                    <!-- DIV CAMISA -->
                    <div style="float: left; margin-left: 14px; padding-bottom: 10px;">
                        <input class="form-check-input" type="checkbox" value="Camisa" id="camisa" name="camisa" onclick="ShowHideCamisa(this)">
                        <label class="form-check-label" for="camisa">
                            Camisa
                        </label>
                    </div>

                    <div id="camisaP" style="display: none;">
                        <div class="form-row">
                            <div class="form-check-inline" style="margin-bottom: 10px;">

                                <input style="margin-left: 39px;" class="form-check-input" type="checkbox" id="tamanhoCamisaP" value="P" name="tamanhoCamisaP" onclick="ShowHideQuantidadeP(this)">
                                <label class="form-check-label" for="tamanhoCamisaP" style="margin-right: 22px;" id="camisaP">P</label>
                                <div id="quantidadeCamisaP" style="display: none;">
                                    <input type="number" style="max-width: 25% !important;" name="quantidadeCamisaP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                            <input class="form-check-input" type="checkbox" id="tamanhoCamisaM" value="M" name="tamanhoCamisaM" onclick="ShowHideQuantidadeM(this)">
                            <label class="form-check-label" for="tamanhoCamisaM" style="margin-right: 19px;">M</label>
                            <div id="quantidadeCamisaM" style="display: none;">
                                <input type="number" style="max-width: 25% !important;" name="quantidadeCamisaM">
                            </div>
                        </div>
                        <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                            <input class="form-check-input" type="checkbox" id="tamanhoCamisaG" value="G" name="tamanhoCamisaG" onclick="ShowHideQuantidadeG(this)">
                            <label class="form-check-label" for="tamanhoCamisaG" style="margin-right: 22px;">G</label>
                            <div id="quantidadeCamisaG" style="display: none;">
                                <input type="number" style="max-width: 25% !important;" name="quantidadeCamisaG">
                            </div>
                        </div>
                    </div>
                    <!--------------------->

                    <!-- div de limpeza clear both -->
                    <div id="limpeza"></div>

                    <!-- DIV CALÇA DE MOLETON -->

                    <div style="float: left; margin-left: 14px; padding-bottom: 10px;">
                        <input class="form-check-input" type="checkbox" value="Moletom" id="moletom" name="moletom" onclick="ShowHideMoletom(this)">
                        <label class="form-check-label" for="moletom">
                            Moletom
                        </label>
                    </div>

                    <div id="moletomP" style="display: none">
                        <div class="form-row">
                            <div class="form-check-inline" style="margin-bottom: 10px;">
                                <input style="margin-left: 22px;" class="form-check-input" type="checkbox" id="tamanhoMoletomP" value="P" onclick="ShowHideQuantidadeMoletomP(this)" name="tamanhoMoletomP">
                                <label class="form-check-label" for="tamanhoMoletomP" style="margin-right: 27px;">P</label>
                                <div id="quantidadeMoletomP" style="display: none;">
                                    <input type="number" style="max-width: 25% !important;" name="quantidadeMoletomP">
                                </div>
                            </div>
                        </div>

                        <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                            <input class="form-check-input" type="checkbox" id="tamanhoMoletomM" value="M" onclick="ShowHideQuantidadeMoletomM(this)" name="tamanhoMoletomM">
                            <label class="form-check-label" for="tamanhoMoletomM" style="margin-right: 20px;">M</label>
                            <div id="quantidadeMoletomM" style="display: none;">
                                <input type="number" style="max-width: 25% !important;" name="quantidadeMoletomM">
                            </div>
                        </div>
                        <div class="form-row" style="margin-left: 123px; margin-bottom: 10px;">
                            <input class="form-check-input" type="checkbox" id="tamanhoMoletomG" value="G" onclick="ShowHideQuantidadeMoletomG(this)" name="tamanhoMoletomG">
                            <label class="form-check-label" for="tamanhoMoletomG" style="margin-right: 22px;">G</label>
                            <div id="quantidadeMoletomG" style="display: none;">
                                <input type="number" style="max-width: 25% !important;" name="quantidadeMoletomG">
                            </div>
                        </div>
                    </div>


                    <!-- div de limpeza clear both -->
                    <div id="limpeza"></div>

                    <div style="float: left; margin-left: 14px; padding-bottom: 10px;">
                        <input class="form-check-input" type="checkbox" value="Cracha" id="cracha" name="cracha" onclick="ShowHideCracha(this);">
                        <label class="form-check-label" for="cracha">
                            Crachá
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-check-inline" style="margin-bottom: 10px; margin-left: 93px;">
                        <div id="quantidadeCracha" style="display: none;">
                            <input type="number" style="max-width: 25% !important;" name="quantidadeCracha">
                        </div>
                    </div>
                </div>

                <!------------------>

                <!-- div de limpeza clear both -->
                <div id="limpeza" style="margin-bottom: 20px;"></div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <?php echo "<a href='#' onclick='pedidoUniforme();'><button class='btn btn-primary' type='submit'>Enviar</button></a>" ?>
                </div>
            </form>
        </div>
    </div>
</div>
