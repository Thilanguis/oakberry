<?php 

include_once 'conexaoComBanco.php';

$h = $_GET['h'];

if(!empty($h)){
    $pdo->query("update franqueados set status = '1' where md5(id) = '$h' ");
    echo "Cadastro confirmado com sucesso!";
}

?>
