<!DOCTYPE html>
<?php

    $mysqli = new mysqli("localhost", "root","","my_esameab");
    if ($mysqli->connect_errno) {
        die("Errore di connessione al db" . $mysqli->connect_error);
    }

    //data di oggi:
    $data = date("d-m-Y");
    $dataOggi = new DateTime("$data");


    $sqlquery2 = "SELECT * FROM `pagamenti`";
    if ($result = $mysqli->query($sqlquery2)) {
        while ($row = $result->fetch_assoc()) {
        	$dataPagamento = $row['data'];
            
            $sqlquery1 = "SELECT * FROM `utente` WHERE `email`='".$row['FkEmail']."'";
            if ($result2 = $mysqli->query($sqlquery1)) {
            	$row2 = $result2->fetch_assoc();
                $datapag = new DateTime("$dataPagamento");
                    
				$interval = date_diff($datapag, $dataOggi);
                $diff = $interval->format('%a');
                
                echo $diff;
                if(($row2['attivo'] == 1) && ($diff > 2)){
                	//ha superato i giorni per poter visitare il museo.
                	$sq = "UPDATE `utente` SET `attivo`='0' WHERE `email` = '".$row['FkEmail']."'";
                    	$mysqli->query($sq);
                    
                    $sq2 = "DELETE FROM `pagamenti` WHERE `FkEmail` = '".$row['FkEmail']."' LIMIT 1";
						$mysqli->query($sq2);
                    echo "avvenuto con successo";
				}
                
            }
            
            echo "<br><br><br>";
        }
    }


?>