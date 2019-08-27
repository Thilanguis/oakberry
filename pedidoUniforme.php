<?php

// check Boné 
if(isset($_POST['bone'])){
    echo $bone = $_POST["bone"];
}

if(isset($_POST['quantidadeBone'])){
    echo $quantidadeBone = $_POST["quantidadeBone"];
}

if(isset($_POST['camisa'])){
    echo $camisa = $_POST['camisa'];
}

if(isset($_POST['quantidadeCamisaP'])){
    echo $quantidadeCamisaP = $_POST['quantidadeCamisaP'];
}

if(isset($_POST['tamanhoCamisaP'])){
    echo $tamanhoCamisaP = $_POST['tamanhoCamisaP'];
}

if(isset($_POST['quantidadeCamisaM'])){
    echo $quantidadeCamisaM = $_POST['quantidadeCamisaM'];
}

if(isset($_POST['tamanhoCamisaM'])){
    echo $tamanhoCamisaM = $_POST['tamanhoCamisaM'];
}

if(isset($_POST['quantidadeCamisaG'])){
    echo $quantidadeCamisaG = $_POST['quantidadeCamisaG'];
}

if(isset($_POST['tamanhoCamisaG'])){
    echo $tamanhoCamisaG = $_POST['tamanhoCamisaG'];
}

if(isset($_POST['moletom'])){
    echo $moletom = $_POST['moletom'];
}

if(isset($_POST['quantidadeMoletomP'])){
    echo $quantidadeMoletomP = $_POST['quantidadeMoletomP'];
}

if(isset($_POST['tamanhoMoletomP'])){
    echo $tamanhoMoletomP = $_POST['tamanhoMoletomP'];
}

if(isset($_POST['quantidadeMoletomM'])){
    echo $quantidadeMoletomM = $_POST['quantidadeMoletomM'];
}

if(isset($_POST['tamanhoMoletomM'])){
    echo $tamanhoMoletomM = $_POST['tamanhoMoletomM'];
}

if(isset($_POST['quantidadeMoletomG'])){
    echo $quantidadeMoletomG = $_POST['quantidadeMoletomG'];
}

if(isset($_POST['tamanhoMoletomG'])){
    echo $tamanhoMoletomG = $_POST['tamanhoMoletomG'];
}

if(isset($_POST['cracha'])){
    echo $cracha = $_POST['cracha'];
}

if(isset($_POST['quantidadeCracha'])){
    echo $quantidadeCracha = $_POST['quantidadeCracha'];
}

$verificaInputVazio = $quantidadeBone != "" || $quantidadeCamisaP != "" || $quantidadeCamisaM != "" || $quantidadeCamisaG != "" || $quantidadeMoletomP != "" || $quantidadeMoletomM != "" || $quantidadeMoletomG != "" || $quantidadeCracha != "";

if($verificaInputVazio){
    header('location:franqueadoLogado.php?cadastrado=Pedido enviado com sucesso!');
        $assunto = "Pedido de uniforme";
        $mensagem = "Pedido de uniforme ". $bone ;
        $header = "From: Pedidos de Uniforme" . ;
                
                mail("jefferson@oakberry.rio", $assunto, $mensagem, $header);
}
else{
    header('location:franqueadoLogado.php?msg=Para fazer pedidos preencha quantidade de algum iten!');
}
    
?>
