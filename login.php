<?php require_once 'assets/globals/config.php' ?>
<!DOCTYPE html>
<html ng-app="ninepixels">
    <head>
        <?php include 'assets/globals/meta.php' ?>
    </head>
    <body>
        <div class="container">
            <?php include 'assets/globals/header.php' ?>

            <div class="row" ng-controller="npLoginCtrl">
                <div class="col-lg-12">
                    <h3>Please sign in</h3>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" ng-model="data.email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" ng-model="data.password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" ng-click="login(data)">Login</button>
                    </div>
                </div>
            </div>

            <?php include 'assets/globals/footer.php' ?>
        </div>

        <?php include 'assets/globals/integration.php' ?>
    </body>
</html>