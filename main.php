<link rel="stylesheet" href="css/style.css">

<div class="container lorem">
    <div class="row">
        <div class="col-md-4 d-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget odio vitae orci maximus viverra. Aenean eu varius leo. Curabitur iaculis est lorem, a tempor nulla sagittis a. Aliquam blandit ipsum tincidunt dolor hendrerit ullamcorper. Vestibulum condimentum sagittis nisi, fermentum molestie nibh volutpat nec. Integer aliquet urna in nisl rutrum ornare. Morbi porttitor faucibus tortor sit amet mollis. Aliquam mauris neque, viverra et varius eu, eleifend eget tortor. Quisque sollicitudin augue placerat massa ultrices, ac tincidunt tellus ultrices. Integer fermentum ipsum ante. Donec viverra nunc non eros ultrices aliquet.</div>
        <div class="col-md-4">
            <img class="img-fluid" src="images/placeholder.webp" alt="">
        </div>
        <div class="col-md-4 botao">
        <?php for($i = 1; $i <= 6; $i ++){?>
        <button type="button" class="btn btn-dark btn-lg btn-block botaomain" href="teste.php">Botão <?php echo $i ?></button>
        <?php } ?>
        </div>
    </div>
</div>

<?php 
$cardname = ['Titulo 1', 'Titulo 2', 'Titulo 3', 'Titulo 4'];
?>

<div class="container">
    <div class="row justify-content-center">
        <?php foreach($cardname as $title){ ?>
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/placeholder.webp" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <?php } ?>
    </div>
</div>
<!-- função de troca de titulo funcionando-->

<div class="container">
    <div class="row">
        <div class="container d-wrap texto">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut porttitor dolor, eleifend iaculis massa. Ut non pretium velit. Curabitur hendrerit fringilla cursus. Mauris est turpis, ultricies finibus volutpat eget, dapibus a nisi. Quisque ultrices dui purus, et condimentum ipsum laoreet eu. Vivamus porta tellus non imperdiet commodo. Aenean ornare orci in ante pulvinar eleifend.
Nam tincidunt facilisis arcu, sit amet imperdiet libero semper sed. In fermentum ullamcorper orci quis hendrerit. Cras nec porta ex. Sed vel enim sed arcu vestibulum tempor eu id urna. Pellentesque sed odio et neque convallis rhoncus. Morbi malesuada varius mattis. Fusce sodales nulla ac ex mattis maximus. In ullamcorper urna non justo laoreet hendrerit.</p>
        </div>
    </div>
</div>