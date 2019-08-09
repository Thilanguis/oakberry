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

    <link rel="stylesheet" href="css/styleCadastro.css">

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div class="container" id="cadastro">
        <h4>Cadastro de franqueados</h4>
        <form method="post" action="cadastrarFranqueados.php">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Franqueado</label>
                    <input type="text" class="form-control" id="franqueado" name="franqueado">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Telefone</label> <img id="adicionar" class="adicionar" src="img/icons8-adicionar-48.png" alt=""> <img id="remover" class="remover" src="img/icons8-menos-64.png" alt="">
                    <input type="number" class="form-control" id="telefone" name="telefone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="franqueado">Outro franqueado</label>
                    <input class="franqueado form-control" id="outroFranqueado" name="outroFranqueado">
                </div>
                <div class="form-group col-md-4">
                    <label class="franqueado" for="">E-mail</label>
                    <input class="franqueado form-control" id="outroEmail" name="outroEmail">
                </div>
                <div class="form-group col-md-3">
                    <label class="franqueado" for="">Telefone</label>
                    <input class="franqueado form-control" id="outroTelefone" name="outroTelefone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Inauguração</label>
                    <input type="date" class="form-control" id="inauguracao" placeholder="" name="inauguracao">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Razão social</label>
                    <input type="number" class="form-control" id="razaoSocial" placeholder="" name="razaoSocial">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">CNPJ</label>
                    <input type="number" class="form-control" id="cnpj" placeholder="" name="cnpj">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Inscrição estadual</label>
                    <input type="number" class="form-control" id="inscricaoEstadual" placeholder="" name="inscricaoEstadual">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Tipo de loja</label>
                    <select name="tipoDeLoja" id="tipoDeLoja" class="form-control">
                        <option value="" selected>...</option>
                        <option value="Shopping">Shopping</option>
                        <option value="Loja de rua">Loja de rua</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">E-mail da loja</label>
                    <input type="email" class="form-control" id="emailDaLoja" placeholder="" name="emailDaLoja">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Shopping</label>
                    <input type="text" class="form-control" id="shopping" placeholder="" name="shopping">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Administradora</label>
                    <input type="text" class="form-control" id="administradora" placeholder="" name="administradora">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço da sede / Matriz</label>
                <input type="text" class="form-control" id="enderecoDaSede" placeholder="" name="enderecoDaSede">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Número</label>
                    <input type="number" class="form-control" id="numeroDeEndereco" name="numeroDeEndereco">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <select id="estado" class="form-control" name="estado">
                        <option value="" selected>Selecione o Estado</option>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro<">Rio de Janeiro</option>
                        <option value=">Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">CEP</label>
                    <input type="number" class="form-control" id="cep" name="cep">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Telefone da loja</label>
                    <input type="number" class="form-control" id="telefoneDaLoja" placeholder="" name="telefoneDaLoja">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Conta bancária</label>
                    <input type="number" class="form-control" id="contaBancaria" placeholder="" name="contaBancaria">
                </div>
            </div>
            <div id="btnCadastrarFraquiados">
                <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
            </div>
        </form>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
