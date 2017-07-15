<!DOCTYPE html>
<html>
	<head>
    <!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
    
    	<title> Utente - inserimento utente </title>
        <script language="javascript">
        	function controlloForm(form)
            {
            	if(form.txtusername.value=="") {
                	alert("Inserire username");
                    form.txtusername.focus();
                    return false;
                }
                if(form.txtpassword.value=="") {
                	alert("Inserire password");
                    form.txtpassword.focus();
                    return false;
                }
                if(form.txtfirstnome.value=="") {
                	alert("Inserire nome");
                    form.txtfirstnome.focus();
                    return false;
                }
                if(form.txtcognome.value=="") {
                	alert("Inserire cognome");
                    form.txtcognome.focus();
                    return false;
                }
                if(form.txttipo.value=="Scelta") {
                	alert("Inserire un privilegio");
                    form.txttipo.focus();
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
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Aggiungi nuovo Utente</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data.php" onSubmit="return controlloForm(this)">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Username">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nome:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstnome" id="focusedInput" type="text" placeholder="Nome">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Cognome:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcognome" id="focusedInput" type="text" placeholder="Cognome">
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Data di nascita:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdata" id="focusedInput" type="date" placeholder="Data">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Privilegio:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txttipo" id="focusedInput" placeholder="Tipo">
                                  <option value="Scelta" selected="selected"> Scegli un privilegio </option>
  									<option value="Cliente"> Cliente </option>
   									<option value="Amministratore"> Amministratore </option>
                                  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Aggiungi Utente</button>
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