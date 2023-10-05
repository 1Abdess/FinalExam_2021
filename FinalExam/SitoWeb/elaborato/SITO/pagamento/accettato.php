<?php
    session_start();
    $mysqli = new mysqli("localhost", "root","","my_esameab");
    if ($mysqli->connect_errno) {
        die("Errore di connessione al db" . $mysqli->connect_error);
    }



    $data = date("d-m-Y");
    $ora = date("h:i");

    $sqlquery = "INSERT INTO `pagamenti`(`IdPag`, `FkEmail`, `FkNomeMuseo`, `data`, `ora`) VALUES (LAST_INSERT_ID(),'".$_SESSION['email']."','Museo Delle Arti','$data','$ora')";
    $mysqli->query($sqlquery);

    $sqlquery2 = "UPDATE `utente` SET `attivo`='1' WHERE `email`='".$_SESSION['email']."';";
    $mysqli->query($sqlquery2);
    
    $mysqli -> close();

    //pagamento effettuato:
    echo "<center>";
    echo "<br><br><br><br>";
        echo "<STRONG>GRAZIE PER AVER EFFETTUATO IL PAGAMENTO IL: </STRONG> <BR>";
        echo "<big>".$data."</big>";echo "<br>";
        echo "le è stata appena inviata una mail con le informazioni sul pagamento.";
    echo "</center>";


    $msg = "Salve, ".$_SESSION["nome"]." ".$_SESSION["cognome"].".\n"."il pagamento di 0,01$ è stato effettuato con successo, grazie. \n\n ///Elaborato 2021.";
    mail($_SESSION['email'],"Pagamento Effettuato - Museo Online",$msg);


    header("refresh:5;url=../museo.php");
    


?>