<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ELABORATO ESAME | MUSEO ONLINE</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anonymous+Pro">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php
    session_start();
    //NAVBAR
    echo '
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="padding: 0px;padding-bottom: 15px;padding-top: 15px;">
        <div class="container"><a class="navbar-brand" href="../index.php">Museo Online</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href=#>Benvenuto '.$_SESSION["nome"].'</a></span>
            </div>
        </div>
    </nav>
    ';

    //parte dei pagamenti:
    $mysqli = new mysqli("localhost", "root","","my_esameab");
    if ($mysqli->connect_errno) {
        die("Errore di connessione al db" . $mysqli->connect_error);
    }

    $email = $_SESSION['email'];
    $sqlquery1 = "SELECT * FROM `utente` WHERE `email` = '$email' LIMIT 1";
    if ($result = $mysqli->query($sqlquery1)) {
        $row = $result->fetch_assoc();

        if ($row['attivo'] == 0){
            
            $sqlquery2 = "SELECT * FROM `museo`";
            
            if ($result = $mysqli->query($sqlquery2)) {
                while ($row = $result->fetch_assoc()) {
                    echo '<center>
                        <br><br><br><br><br><br><br><br><br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8"><img class="img-fluid" src="img/museo.jpg"></div>
                                
                                <div class="col-md-4">
                                    <center>
                                        <strong>COMPRARE IL BIGLIETTO:</strong> <br>
                                        <strong>'.$row['nome'].'</strong> <br>
                                        <small>'.$row['descrizione'].'</small> <br><br><br>
                                        <small>'.$row['via'].', '.$row['stato'].'</small> <br>
                                        <small>costo: '.$row['costo'].'$</small>
                                        <br><br>
                                        
                                        <div id="paypal-payment-button"></div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        ';
                    echo "</center>";
                }
                echo "<br><br><br>";
            }
            
        }else{
            $sqlquery3 = "SELECT * FROM `immagine` WHERE `FkNome`= 'Museo Delle Arti'";
            if ($result = $mysqli->query($sqlquery3)) {
                echo "<br><br><br><br>";
                echo "<center>";
                //echo "<h3><strong>".$nome."</strong></h3>";
                $cont = 1;
                while ($row = $result->fetch_assoc()) {
                    $nome = $row['FkNome'];
                    
                    echo '<form method="GET" action="opera/opera.php">';
                        echo "<div class = 'bottone'>";
                            echo '<input type="hidden" id="IdOpera" name="IdOpera" value="'.$row['IdImm'].'">';
                            echo '<div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(0,0,0);">OPERA N: '.$cont.'</button></div>';
                        echo "</div>";
                    echo '</form>';

                    $cont = $cont +1;
                }
                echo "</center>";
            }
        }
    }


    ?>
    <style type="text/css">
        .bottone{
            max-width:  150px;
        }
    </style>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ&disable-funding=credit,card"></script>
    <script src="js/index.js"></script>
</body>
</html>