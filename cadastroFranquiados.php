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
            <div class="form-group">
                <label for="inputAddress">Nome completo</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
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
                    <label for="inputAddress">Endereço da sede / Matriz</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="">
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
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
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
