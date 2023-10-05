<?php
session_start();
    $mysqli = new mysqli("localhost", "root","","my_esameab");
    if ($mysqli->connect_errno) {
        die("Errore di connessione al db" . $mysqli->connect_error);
    }

    $ID = $_GET['IdOpera'];

    //vediamo se ha il permesso:
    if(isset($_SESSION['email'])){
        $permesso = 1;
    }else{
        $permesso = 0;
    }

    //visualizziamo la pagina web:
    if($permesso == 1){
        $sqlquery1 = "SELECT * FROM `utente` WHERE `email`='".$_SESSION['email']."' LIMIT 1";
        if ($result1 = $mysqli->query($sqlquery1)) {
            $row1 = $result1->fetch_assoc();
            if($row1['attivo'] == 1){
                $sqlquery = "SELECT * FROM `immagine` WHERE `IdImm`='$ID'";
                if ($result = $mysqli->query($sqlquery)) {
                    $row = $result->fetch_assoc();
    
                    echo $row['path'];
                }

            }else{
                echo "<center>";
                    echo "<br><br><br><br><h3>Devi Prima Comprare Un Biglietto.</h3>";
                echo "</center>";

            }
        }
    }else{
        echo "Non hai accesso a questa pagina.";
    }
?>