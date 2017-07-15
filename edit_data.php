<?php
	session_start();
	$userID = $_GET['uID'];
	$_SESSION['username']=$userID;
    
	include('includes/connection.php');

	$sql ="SELECT * FROM Utente WHERE Username = '$userID'";
	$result = mysql_query($sql);

	/*
	$num = mysql_num_rows($result);

	$i = 0;

	while ($i < $num)
	{
		$user = mysql_result($result,$i,"Username");
		$pass = mysql_result($result,$i,"Password");
		$fn = mysql_result($result,$i,"Nome");
		$ln = mysql_result($result,$i,"Cognome");
		$tipo = mysql_result($result,$i,"Tipo");
		$i++;
	}
    */
    
    $query=mysql_fetch_object($result);
    $nome=$query->Nome;
    $cognome=$query->Cognome;
    $dataN=$query->DataNascita;

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Aggiorna i dati dell'Utente</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
                            <!--
							  <div class="control-group">                          
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Username" 
								  value="<?php echo $user; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $pass; ?>">
								</div>
							  </div>
                              -->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nome:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtnome" id="focusedInput" type="text" 
                                  placeholder="<?php echo $nome ?>"
								  value="<?php echo $nome; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Cognome:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcognome" id="focusedInput" type="text" 
                                  placeholder="<?php echo $cognome ?>"
								  value="<?php echo $cognome; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Data di Nascita:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdataN" id="focusedInput" type="date" placeholder="Tipo"
								  value="<?php echo $dataN; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Salva</button>
								 <input type="hidden" name="hid" value="<?php echo $user; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->