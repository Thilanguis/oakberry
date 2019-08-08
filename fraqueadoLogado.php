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

    <link rel="stylesheet" href="css/styleFranqueadoLogado.css">

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <main>

        <div class="menu menu--closed">

            <div class="button">
                <span> </span>
                <span> </span>
                <span> </span>
            </div>

            <div class="tools tools--hidden">
                <!-- Carrinho icon fontawsome-->
                <a href="#">
                    <i class="fas fa-shopping-cart carrinho"></i>
                </a>

                <!-- Dúvidas icon fontawsome-->
                <a href="#">
                    <i class="fas fa-question question"></i>
                </a>

                <!-- Editar icon fontawsome-->
                <a href="#">
                    <i class="fas fa-edit editar"></i>
                </a>

            </div>

        </div>

    </main>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
