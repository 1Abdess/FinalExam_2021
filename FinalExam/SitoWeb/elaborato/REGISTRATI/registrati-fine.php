<?php
//FUNZIONI:
    function CriptaAES256($testo, $salt){
        $password = "OtXv2HZydwFpQze1rDgY8sbA4fNB5nx9";
        
        $iterations = 10000;
        $keyLength = 32;
        $prepared_key = openssl_pbkdf2($password, $salt, $keyLength, $iterations, "sha256");

        $iv = "LQjFLCU3sAVplBC3";
        $testoCifrato = base64_encode(openssl_encrypt($testo,"AES-256-CBC", $prepared_key, OPENSSL_RAW_DATA, $iv));  
        return $testoCifrato;
    }

    function Random($lunghezza) {
        return substr(str_shuffle(str_repeat($h='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($lunghezza/strlen($h)) ) ),1,$lunghezza);
    }
    

//SITO EFFETTIVO
    $mysqli = new mysqli("localhost", "root","","my_esameab");
        if ($mysqli->connect_errno) {
            die("Errore di connessione al db" . $mysqli->connect_error);
        }
    
    
    //criptiamo la password:
    $salt = Random(32);
    $pass = $_POST['password'];    
    


    $passCriptata = CriptaAES256($pass, $salt);
    $nomeCripatato = CriptaAES256($_POST['nome'], $salt);
    $cognomeCriptato = CriptaAES256($_POST['cognome'], $salt);

    
    //carichiamo l'utente sul Db:

    $q = "INSERT INTO `utente`(`email`, `password`, `nome`, `cognome`, `salt`, `attivo`) VALUES ('".$_POST['email']."','$passCriptata','$nomeCripatato','$cognomeCriptato','$salt','0')";
    $mysqli->query($q);

    //invio della mail di conferma

    $msg = "Salve, ".$_SESSION["nome"]." ".$_SESSION["cognome"].".\n"."Le confermiamo che è riuscito a registrarsi correttamente, \n\n ///Elaborato 2021.";
    mail($_SESSION['email'],"Registrazione Completata - Museo Online",$msg);
    
    //fine.
    header("location: ../SITO/login/login.php");
    $mysqli -> close();

    
?>