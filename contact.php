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
            <div class="page-image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d725.6561905039404!2d21.900883829241256!3d43.32211397436034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE5JzE5LjYiTiAyMcKwNTQnMDUuMiJF!5e0!3m2!1ssr!2srs!4v1456261406894" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="container main">
            <div class="row">
                <div class="col-md-5">
                    <h3>Izvršitelj Aleksandar Takić</h3>
                    <br>
                    Кralja Stefana Prvovenčanog 6,<br>
                    18000 Niš, Srbija<br>
                    <br>
                    Telefon: 018 / 527 661<br>
                    Tekući račun: 160-123456-78<br>
                    <br>
                    Матични број: 64038516<br>
                    ПИБ: 109247028<br>
                </div>
                <br><br>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Ime</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="surname">Prezime</label>
                                <input type="text" name="name" id="surname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Poruka</label>
                                <textarea name="message" id="message" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'assets/globals/footer.php' ?>
        <?php include 'assets/globals/integration.php' ?>
    </body>
</html>