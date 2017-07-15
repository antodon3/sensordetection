<!DOCTYPE html>
<html>
	<head>
    <!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
    
    	<title> Installazione - Inserimento Installazione </title>
        <script language="javascript">
        	function controlloForm(form)
            {
            	if(form.txtID.value=="") {
                	alert("Inserire identificativo");
                    form.txtID.focus();
                    return false;
                }
                if(form.txtdenominazione.value=="") {
                	alert("Inserire denominazione");
                    form.txtdenominazione.focus();
                    return false;
                }
                if(form.txtIDsens.value=="") {
                	alert("Inserire ID sensore");
                    form.txtIDsens.focus();
                    return false;
                }
            }
        </script>
    </head>
    <body>

<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Aggiungi Installazione</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_inst.php" onSubmit="return controlloForm(this)">
							<fieldset>
							  <!--
                              <div class="control-group">
								<label class="control-label" for="focusedInput">ID:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtID" id="focusedInput" type="text" placeholder="id">
								</div> 
							  </div> -->
                              
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Denominazione:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdenominazione" id="focusedInput" type="text" placeholder="nome installazione">
								</div>
							  </div>
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtusername" id="focusedInput" placeholder="Tipo">
                                  <?php
                                    $conn = mysql_connect("my_sensdetection","","","");
                                    if(!$conn) {
                                        die('Errore durante la connessione: '.mysql_error());
                                    }
                                    $db = mysql_select_db('my_sensdetection',$conn);
                                    if(!$conn) {
                                        die('Errore durante accesso al database: '.mysql_error());
                                    }
                                  	$sql = mysql_query("SELECT Username FROM Utente WHERE Tipo = 'Cliente';");
                                    while($row = mysql_fetch_array($sql)) {
                                    	echo "<option value=\"" .$row["Username"] . "\">". $row['Username']."</option> \n";
                                        }
                                  ?>
                                  </select>
								</div><br>
                                
                                <!--
                                <div class="control-group">
								<label class="control-label" for="focusedInput">IDSensore:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtIDsens" id="focusedInput" type="text" placeholder="id sensore">
								</div>
							  </div> -->
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Tipo Sensore:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttipo" id="focusedInput" type="text" placeholder="tipo sensore">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Marca Sensore:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtmarca" id="focusedInput" type="text" placeholder="marca sensore">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Aggiungi Installazione</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		
</body>
</html>
	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->