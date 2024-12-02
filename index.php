<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css<?php echo $version_css_js;?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>PHP</title>
</head>
<body>
    <?php
    $title = "MPX BRASIL";
    $version_css_js = '02122024b';   
    $i = 1;
    $n = 0;
    $itemtitulo = ['Item 1','Item 2','Item 3','Item 4'];
    $variaveltitle = ['Noticias','Documentos','Videos'];
    // conta a quantidade de elementos dentro de uma mesma variavel
    $ntitulos = count($variaveltitle);
     ?>
    <header>
        <!-- puxa o arquivo -->
    <?php include('menu_acess.php');?>
    <?php include('index_menu.php');?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row color"><p></p></div>
        </div>
    <!-- <?php include('carousel_main.php') ?> -->

    <?php include('paginacao.php') ?>

        <?php include('main.php') ?>

         <!-- <?php for($i = 0; $i <= 4; $i ++){?>
        <img src="images/image<?php echo $i ?>.jpg" alt="">
        <?php } ?>
        <?php for($i = 0;$i <= 4; $i ++){?>
            <h1>titulo<?php echo $i ?></h1>
            <?php }?>


            <?php while($n < $ntitulos){ ?>
            <div class="card">
            <div class="card-body">
                <?php echo $variaveltitle[$n];?>
            </div>
            </div>
            <?php $n ++; }?>

            <?php echo $ntitulos;?> -->
            </main>

    <footer>
    <div class="container-fluid">
    <div class="row color"><p></p></div>
        <?php include('footer.php') ?>
    </footer>
</body>
</html>