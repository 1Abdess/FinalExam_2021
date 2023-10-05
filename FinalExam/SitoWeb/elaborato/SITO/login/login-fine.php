<?php
session_start();

//FUNZIONI:

    function DecriptaAES256($testo, $salt){
        $password = "OtXv2HZydwFpQze1rDgY8sbA4fNB5nx9";

        $iterations = 10000;
        $keyLength = 32;
        $prepared_key = openssl_pbkdf2($password, $salt, $keyLength, $iterations, "sha256");


        $iv = "LQjFLCU3sAVplBC3";
        $testoDecifrato = openssl_decrypt(base64_decode($testo),"AES-256-CBC", $prepared_key, OPENSSL_RAW_DATA, $iv);
        return $testoDecifrato;
    }

//SITO:

    $mysqli = new mysqli("localhost", "root","","my_esameab");
    if ($mysqli->connect_errno) {
        die("Errore di connessione al db" . $mysqli->connect_error);
    }

    $email = $_POST['email'];
    $passPOST = $_POST['password'];

    $sqlquery = "SELECT * FROM `utente` WHERE `email` = '$email' LIMIT 1";
    if ($result = $mysqli->query($sqlquery)) {
        $row = $result->fetch_assoc();

            $passDe = DecriptaAES256($row['password'], $row['salt']);

                if(($row['email'] == $email) && ($passDe == $passPOST)){

                    $_SESSION["nome"] = DecriptaAES256($row['nome'], $row['salt']);
                    $_SESSION["cognome"]= DecriptaAES256($row['cognome'], $row['salt']);
                    $_SESSION['email'] = $row['email'];

                    echo "<center>";
                        echo "benvenuto, ";
                        echo $_SESSION["nome"]; 
                        echo " ";
                        echo $_SESSION["cognome"];
                    echo "</center>";

                    /*
                    if($row['attivo'] == 1){
                        //il pagamento è stato fatto.
                        $_SESSION['pagato'] = 1;
                    }else{
                        //pagamento non è stato fatto.
                        $_SESSION['pagato'] = 0;

                    }
                    */

                    
                    header("refresh:1;url=../museo.php");
                    $mysqli -> close();
                    exit();
                    
                }else {
                    echo "<center>";
                    echo "Email e/o username non validi.";
                    echo "</center>";
                    header("refresh:3;url=login.php");  
                    exit();
                    $mysqli -> close();
                }  

    $result->close();
}

?>