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
    session_start();
    ?>

</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <div id="sumirDiv">
        <?php
        if(isset($_GET["verificaEmail"]))
                { ?>
        <div class="alert alert-success animated zoomIn container" role="alert" style="width: 300px; margin-top: 0; text-align: center; padding: 0; height: auto;">
            <?php echo $verificaEmail = $_GET["verificaEmail"]; ?>
        </div> <?php } ?>
    </div>

    <div id="carousel">
        <!-- carrosel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/bg-oak.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/OAK-ImagemSite-1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/OAK-ImagemSite-2.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>
