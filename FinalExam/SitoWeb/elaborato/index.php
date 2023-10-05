<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ELABORATO ESAME | MUSEO ONLINE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anonymous+Pro">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="padding: 0px;padding-bottom: 15px;padding-top: 15px;">
        <div class="container"><a class="navbar-brand" href="#">Museo Online</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="SITO/login/login.php">Log In</a><a class="btn btn-light action-button" role="button" href="REGISTRATI/registrati.php" style="background: rgb(0,0,0);color: rgb(255,255,255);">Registrati</a></span>
            </div>
        </div>
    </nav>
    <section style="padding: 25px;margin: 0;">
        <div class="container" style="color: rgb(0,0,0);background: rgb(251,251,251);">
            <div class="row" style="margin: 89px;">
                <div class="col-md-6"><img src="assets/img/vso5d9wlt7s-e1553532150826.jpg" style="transform: translate(-69px);filter: blur(4px);"></div>
                <div class="col-md-6"><small class="form-text d-table" style="width: 0;height: 0;padding: 0;font-size: 47px;text-align: center;color: rgb(73,74,76);text-shadow: 19px 9px 20px rgb(176,178,181);margin-top: 100px;">Museo&nbsp;<br>Virtuale<br>/<br>Elaborato<br>2021&nbsp;</small></div>
            </div>
        </div>
    </section>
    <section style="background: rgb(40, 45, 50);margin: 20px;margin-bottom: 40px;margin-top: 94px;color: rgb(0,0,0);"><small class="form-text text-white" style="font-size: 30px;margin: 0;margin-top: 0;padding: 0;padding-top: 0;color: rgb(124,124,124);font-family: 'Anonymous Pro', monospace;">PERCHÈ SCEGLIERE IL NOSTRO SERVIZIO?<br></small></section>
    <section class="article-list">
        <div class="container">
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><img src="assets/img/im%20(3).jpg" style="transform: scale(0.69);">
                    <h3 class="name">Alta Qualità</h3>
                    <p class="description">Tutte le opere sono fotografate in 4K UHD.<br></p><a class="action" href="#"></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"></a><img src="assets/img/im%20(2).jpg" style="transform: scale(0.69);">
                    <h3 class="name">Velocità</h3>
                    <p class="description">Tutte le immagini sono caricate su server a banda larga.<br>La velocità di caricamento è sempre garantita.</p><a class="action" href="#"></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><img src="assets/img/im%20(1).jpg" style="transform: perspective(0px) translate(0px) rotate(0deg) scale(0.69);"><a href="#"></a>
                    <h3 class="name">Comodità</h3>
                    <p class="description">Puoi usufruire del servizio dovunque tu sia.</p><a class="action" href="#"></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-dark" style="background: rgb(40, 45, 50);">
        <div class="container">
            <p class="copyright"><br>© A. Ghazouline 2020 - 2021<br><br></p>
        </div>
    </footer>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>