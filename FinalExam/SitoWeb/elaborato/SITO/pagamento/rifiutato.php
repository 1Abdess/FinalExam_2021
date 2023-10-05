<?php
    session_start();

    echo "<center>";
    echo "<br><br><br><br>";
        echo "<STRONG>PAGAMENTO RIFIUTATO. </STRONG> <BR>";
    echo "</center>";

    session_destroy();
    header("refresh:10;url=../../index.php");
?>