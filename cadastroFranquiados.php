<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>OakBerry Açaí!</title>
    <!--font da google-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">


    <?php
    include_once 'head.php';
    ?>

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div class="container" id="cadastro">
        <h4>Cadastro de franquiados</h4>
        <form>
            <div class="form-group">
                <label for="inputAddress">Nome completo</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Inauguração</label>
                    <input type="date" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Razão social</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">CNPJ</label>
                    <input type="number" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Inscrição estadual</label>
                    <input type="number" class="form-control" id="inputPassword4" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Tipo de loja</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Ex: Loja de rua">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">E-mail da loja</label>
                    <input type="email" class="form-control" id="inputPassword4" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Shopping</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Administradora</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço da sede / Matriz</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Complemento</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Bairro</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Número</label>
                    <input type="number" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control">
                        <option selected>Selecione o Estado</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">CEP</label>
                    <input type="number" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Telefone da loja</label>
                    <input type="number" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Conta bancária</label>
                    <input type="number" class="form-control" id="inputPassword4" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">Franqueado</label>
                    <input type="text" class="form-control" id="franqueado">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">E-mail</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Telefone</label> <img id="adicionar" class="adicionar" src="img/icons8-adicionar-48.png" alt=""> <img id="remover" class="remover" src="img/icons8-menos-64.png" alt="">
                    <input type="number" class="form-control" id="telefone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="franqueado">Outro franqueado</label>
                    <input class="franqueado form-control" id="">
                </div>
                <div class="form-group col-md-4">
                    <label class="franqueado" for="">E-mail</label>
                    <input class="franqueado form-control" id="">
                </div>
                <div class="form-group col-md-3">
                    <label class="franqueado" for="">Telefone</label>
                    <input class="franqueado form-control" id="">
                </div>
            </div>
            <div id="cadastrarFraquiados">
                <button type="submit" class="btn btn-light">Cadastrar</button>
            </div>
        </form>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
