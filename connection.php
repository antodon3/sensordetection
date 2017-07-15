<?php
 $conn = mysql_connect("my_sensdetection","","","");
    if(!$conn) {
    	die('Errore durante la connessione: '.mysql_error());
    }
    $db = mysql_select_db('my_sensdetection',$conn);
    if(!$conn) {
    	die('Errore durante accesso al database: '.mysql_error());
    }
?>