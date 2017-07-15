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
            	if(form.txtdata.value=="") {
                	alert("Inserire data");
                    form.txtdata.focus();
                    return false;
                }
                if(form.txtindirizzo.value=="") {
                	alert("Inserire indirizzo");
                    form.txtindirizzo.focus();
                    return false;
                }
            }
        </script>
    </head>
    <body>

<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar_cliente();
	get_bread_five();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Importa Dati Installazione</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_imp.php" onSubmit="return controlloForm(this)">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Data:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdata" id="focusedInput" type="date">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Indirizzo Server:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtindirizzo" id="focusedInput" type="text" placeholder="Link">
								</div>
							  </div>
								
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Importa Dati</button>
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