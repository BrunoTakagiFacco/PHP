
<link rel="stylesheet" href="css/style.css">

<?php 
$acess = ['Aumentar fontes', 'Alto contraste', 'Mapa do site', 'Fonte para dislexia', 'Sobre acessibilidade'];
?>
<div class="container d-flex justify-content-center boxacess">
    <div class="row gap-2">
        <div class="container">
        <?php for($i = 0; $i <= 4; $i ++){ ?>
        <button type="button" class="botaoacess"><?php echo $acess[$i] ?></button>
        <?php } ?>
        </div>
    </div>
</div>