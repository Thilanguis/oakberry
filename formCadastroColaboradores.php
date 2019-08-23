<?php include_once 'verificaLogin.php'; include_once 'funcoesProjeto.php'; ?>
<div class="formularioColaboradores animated zoomIn">

    <div class="">
        <h4>Cadastro de colaboradores</h4>
        <form method="post" action="cadastroColaboradores.php">

            <div class="form-row">
                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputState">Nome completo<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" value="<?php
                if(isset($_GET["nomeCompleto"]))
                {
                 echo $msg = $_GET["nomeCompleto"]; }  ?>">
                </div>


            </div>

            <div class="form-row">
                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputState">CPF<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="cpf" name="cpf" onblur="if(!TestaCPF(this.value)){alert('CPF Informado é inválido'); this.value='';};" value="<?php
                if(isset($_GET["cpf"]))
                {
                 echo $msg = $_GET["cpf"]; }  ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">RG<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="rg" placeholder="" name="rg" value="<?php
                if(isset($_GET["rg"]))
                {
                 echo $msg = $_GET["rg"]; }  ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">Data admissão<div id="asteristico">*</div></label>
                    <input type="date" class="form-control" id="dataAdmissao" placeholder="" name="dataAdmissao" value="<?php
                if(isset($_GET["dataAdmissao"]))
                {
                 echo $msg = $_GET["dataAdmissao"]; }  ?>">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">Nome da mãe<div id="asteristico">*</div></label>
                    <input type="text" class="form-control" id="nomeDaMae" placeholder="" name="nomeDaMae" value="<?php
                if(isset($_GET["nomeDaMae"]))
                {
                 echo $msg = $_GET["nomeDaMae"]; }  ?>">
                </div>
            </div>

            <div id="campos">
                <p>* Campos obrigatórios</p>
            </div>

            <div id="btnCadastrarColaboradores">
                <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
