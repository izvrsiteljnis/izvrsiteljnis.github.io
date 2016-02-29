<?php require_once 'assets/globals/config.php' ?>
<!DOCTYPE html>
<html ng-app="ninepixels">
    <head>
        <?php include 'assets/globals/meta.php' ?>
    </head>
    <body>
        <?php include 'assets/globals/header.php' ?>
        <?php include 'assets/globals/navigation.php' ?>

        <div class="container-fluid nopadding">
            <div class="page-image"></div>
        </div>

        <div class="container main">
            <div class="row">
                <div class="col-md-3 products-sidebar">
                    <div class="heading">
                        <b>Prodaja</b><span>pokretnih stvari</span>
                    </div>
                    <div class="side-bar-item">
                        <i class="tv-icon"></i>
                        <span>Tehnika</span>
                    </div>
                    <div class="side-bar-item">
                        <i class="furniture-icon"></i>
                        <span>Nameštaj</span>
                    </div>
                    <div class="side-bar-item">
                        <i class="art-icon"></i>
                        <span>Umetnost</span>
                    </div>
                    <div class="side-bar-item">
                        <i class="box-icon"></i>
                        <span>Ostalo</span>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-8 products-list">
                    <div class="product-item"></div>
                </div>
            </div>
        </div>

        <?php include 'assets/globals/footer.php' ?>
        <?php include 'assets/globals/integration.php' ?>
    </body>
</html>