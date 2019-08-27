<?php 
// check Boné 
if(isset($_POST['bone'])){
    echo $_POST["bone"];
}

if(isset($_POST['camisa'])){
    echo $_POST['camisa'];
}

if(isset($_POST['quantidadeCamisaP'])){
    echo $_POST['quantidadeCamisaP'] . "x";
}

if(isset($_POST['tamanhoCamisaP'])){
    echo $_POST['tamanhoCamisaP'];
}

if(isset($_POST['quantidadeCamisaM'])){
    echo $_POST['quantidadeCamisaM'] . "x";
}

if(isset($_POST['tamanhoCamisaG'])){
    echo $_POST['tamanhoCamisaG'];
}

?>
