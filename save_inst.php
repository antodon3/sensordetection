<?php
  $un = $_POST['txtusername'];
  $den = $_POST['txtdenominazione'];

  $tip = $_POST['txttipo'];
  $mar = $_POST['txtmarca'];

  include('includes/connection.php');

	//echo('<FORM><br><INPUT TYPE="button" VALUE="TORNA INDIETRO" onClick="history.go(-1);return true;"> </FORM>');

  $queryID=mysql_query("SELECT IDInstallazione FROM Installazione ORDER BY IDInstallazione desc");
  $resultID=mysql_fetch_object($queryID);
  $id=$resultID->IDInstallazione;
  $id++;
  $sql="INSERT INTO Installazione VALUES ('$id', '$den', '$un')";
  mysql_query($sql);
  
  $queryID=mysql_query("SELECT IDInfo FROM Info ORDER BY IDInfo desc");
  $resultID=mysql_fetch_object($queryID);
  $idi=$resultID->IDInfo;
  $idi++;
  $sql="INSERT INTO Info VALUES ('$idi', '$tip', '$mar')";
  mysql_query($sql);
  
  $queryID=mysql_query("SELECT IDSensore FROM Sensore ORDER BY IDSensore desc");
  $resultID=mysql_fetch_object($queryID);
  $ids=$resultID->IDSensore;
  $ids++;
  $sql="INSERT INTO Sensore VALUES ('$ids', '$idi')";
  mysql_query($sql);
  
  $sql="INSERT INTO Monitoraggio VALUES ('$ids','$id','00000000000000','avvio')";
  mysql_query($sql);
  
  header('location:installazioni.php');
  
  /*
  if (mysql_query($sql) && )
  {
      header('location:installazioni.php');
  }
  else
  {
      die('Errore: ' .mysql_error());
  }
  */
//}

?>