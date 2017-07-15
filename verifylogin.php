<?php
session_start();
//$_SESSION["username"] = $_POST['username'];
//$_SESSION["password"] = $_POST['password'];
$user = $_POST['username'];
$pwd = $_POST['password'];


include 'includes/connection.php';

$sql = "SELECT * FROM Utente WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."'"
or DIE('query non riuscita'.mysql_error());

$result =mysql_query($sql);

$num = mysql_num_rows($result);

if($num==1)
{ 
	echo 'if';
    
    //penso che questa riga non serva
	$row=mysql_fetch_assoc($result);
    
    //if($pwd==$row->Password){
      //echo('<a href="https://www.google.com">Visit W3Schools</a>');
      
      $_SESSION['msg'] = '<h2>Accesso eseguito!</h2>';
      $_SESSION['user'] = $user;
      $_SESSION['pwd'] = $pwd;
      $query2="SELECT Tipo FROM Utente WHERE Username='$user'";
      $result2=mysql_query($query2);
      $row2=mysql_fetch_object($result2);
      $tipo=$row2->Tipo;
      echo ("Si tratta di un:".$tipo);
      if($tipo=="Amministratore"){
       header('location:index.php');
      }
      else {
       header('location:indexCliente.php');
      }
}
else
{
  echo 'else';
  $_SESSION['msg'] = '<h2>Dati invalidi</h2>';
  header('location:login.php');
}
?>
