
<?php
$un = $_POST['username'];
$pwd = $_POST['password'];

include 'includes/connection.php';

$sql = "SELECT * FROM Utente WHERE username='$un'";

$result = mysql_query($sql);

$num = mysql_num_rows($result);

if($num==1)
{ 
	session_start();
	$row=mysql_fetch_object[$result];
    if($pwd==$row->Password){
      $_SESSION['msg'] = '<h2>Password non valida</h2>';
      header('location:login.php');
    }
    else {
      $_SESSION['un'] = $un;
      header('location:index.php');
    }
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Username invalido</h2>';
  header('location:login.php');
}
?>
