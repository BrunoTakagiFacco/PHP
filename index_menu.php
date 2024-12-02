<div class="container topo">
            <div class="row">
                <div class="col-12 col-md-6 boxtitulo">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <img class="img-fluid" src="images/logo-mpx.png" alt="">
                    </div>
                    <div class="col-12 col-md-7">
                    <h2 class="titulotopo">
                    <?php 
                    // echo $title;
                    ?>
                    </h2>
                    </div>
                </div>
                </div>
                <div class="col-12 col-md-3 boxmenu">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6 menuitem">
                                <?php for($i = 1; $i <= 5; $i ++){ ?>
                                <li class="nav-item" style="list-style: none;">
                                <a class="nav-link" href="menu1.php"><strong>ITEM</strong></a>
                                </li>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-md-3">
            <div class="col-12 col-md-6">
                            <div class="input-group mb-3 busca">
                            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Ok</button>
                            </div>
                            </div>
                            </div>
            </div>
        </div>
</div>