<?php
session_start();
$user = $_GET['uID'];
echo "<script type='text/javascript'>alert('$user');</script>";

include('includes/connection.php');

$sql = "DELETE FROM Utente WHERE Username='$user'";
if(mysql_query($sql))
{
	echo "<script type='text/javascript'>alert('wannaaaaa');</script>";
	header('location:users.php');
}
else
{
	echo "<script type='text/javascript'>alert('$user');</script>";
	die('Could not delete record:' .mysql_error());
}

?>