<div class="editarCadastroFranqueados animated zoomIn">

    <i id="xEditar" class="fas fa-times"></i>
    <h4>Editar seus contatos



        <input type="hidden" value="<?php echo $_SESSION["idFranqueado"]; ?> ">

        <?php
           
    include_once 'conexaoComBanco.php';
    
    $sql = "select * from franqueados where id=".$_SESSION["idFranqueado"];
           
    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_array($result);
    
    ?>

    </h4>
    <form>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">Franqueado</label>
                <input type="text" class="form-control" id="franqueado" value="<?php echo $row["nomePrimeiroFranqueado"] ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">E-mail</label>
                <input type="email" class="form-control" id="email" value="<?php echo $row["emailPrimeiroFranqueado"] ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputZip">Telefone</label> <img id="adicionar" class="adicionar" src="img/icons8-adicionar-48.png" alt=""> <img id="remover" class="remover" src="img/icons8-menos-64.png" alt="">
                <input type="number" class="form-control" id="telefone" value="<?php echo $row["telefonePrimeiroFranqueado"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label class="franqueado">Outro franqueado</label>
                <input class="franqueado form-control" id="" value="<?php echo $row["nomeSegundoFranqueado"] ?>">
            </div>
            <div class="form-group col-md-4">
                <label class="franqueado" for="">E-mail</label>
                <input class="franqueado form-control" id="" value="<?php echo $row["emailSegundoFranqueado"] ?>">
            </div>
            <div class="form-group col-md-3">
                <label class="franqueado" for="">Telefone</label>
                <input class="franqueado form-control" id="" value="<?php echo $row["telefoneSegundoFranqueado"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Inauguração</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $row["inauguracao"] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Razão social</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="" value="<?php echo $row["razaoSocial"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">CNPJ</label>
                <input type="number" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $row["cnpj"] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Inscrição estadual</label>
                <input type="number" class="form-control" id="number" placeholder="" value="<?php echo $row["inscricaoEstadual"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Tipo de loja</label>
                <select name="" id="" class="form-control">
                    <option value="<?php echo $row["tipoDeLoja"] ?>" selected><?php echo $row["tipoDeLoja"] ?></option>
                    <option value="Shopping">Shopping</option>
                    <option value="Loja de rua">Loja de rua</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">E-mail da loja</label>
                <input type="email" class="form-control" id="inputPassword4" placeholder="" value="<?php echo $row["emailDaLoja"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Shopping</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $row["shopping"] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Administradora</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="" value="<?php echo $row["administradora"] ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress">Endereço da sede / Matriz</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="" value="<?php echo $row["enderecoMatriz"] ?>">
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">Complemento</label>
                <input type="text" class="form-control" id="inputCity" value="<?php echo $row["complemento"] ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Bairro</label>
                <input type="text" class="form-control" id="inputZip" value="<?php echo $row["bairro"] ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputZip">Número</label>
                <input type="number" class="form-control" id="inputZip" value="<?php echo $row["numero"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" value="<?php echo $row["cidade"] ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control">
                    <option value="<?php echo $row["estado"] ?>" selected> <?php echo $row["estado"] ?></option>
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
                <input type="number" class="form-control" id="cep" value="<?php echo $row["cep"] ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Telefone da loja</label>
                <input type="number" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $row["telefoneLoja"] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Conta bancária</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="" value="<?php echo $row["contaBancaria"] ?>">
            </div>
        </div>

        <div id="btnCadastrarFraquiados">
            <button type="submit" class="btn btn-outline-dark">Atualizar</button>
        </div>
    </form>
</div>
