<?php
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstnome'];
$ln = $_POST['txtcognome'];
$data = $_POST['txtdata'];
$tipo = $_POST['txttipo'];

include('includes/connection.php');

$queryprova = "SELECT Username FROM Utente WHERE Username='$un'";
$prova=mysql_query($queryprova);
$num=mysql_num_rows($prova);

if($num>0) {
	echo 'UTENTE ESISTENTE';
 	echo('<FORM><br><INPUT TYPE="button" VALUE="TORNA INDIETRO" onClick="history.go(-1);return true;"> </FORM>');
	//die(' ');
   
}
else {
  if($data=="")
  {
      $sql="INSERT INTO `my_sensdetection`.`Utente` (`Username`, `Password`, `Nome`, `Cognome`, `DataNascita`, `Tipo`) VALUES ('$un', '$pw', '$fn', '$ln', NULL, '$tipo')";
  }
  else
  {
      $sql="INSERT INTO `my_sensdetection`.`Utente` (`Username`, `Password`, `Nome`, `Cognome`, `DataNascita`, `Tipo`) VALUES ('$un', '$pw', '$fn', '$ln', '$data', '$tipo')";
  }
  if (mysql_query($sql))
  {
      header('location:users.php');
  }
  else
  {
      die('Errore: ' .mysql_error());
  }
}




?>