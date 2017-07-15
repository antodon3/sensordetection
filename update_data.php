<?php
session_start();
$nom = $_POST['txtnome'];
$cog = $_POST['txtcognome'];
$dat = $_POST['txtdataN'];
$username = $_SESSION['username'];

include('includes/connection.php');

if($dat==""){
	$sql = "UPDATE Utente SET Nome='$nom', Cognome='$cog', DataNascita=NULL WHERE Username='$username'";
}
else {
	$sql = "UPDATE Utente SET Nome='$nom', Cognome='$cog', DataNascita='$dat' WHERE Username='$username'";
}

//fare una vista

if(mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('Errore: ' .mysql_error());
}

?>