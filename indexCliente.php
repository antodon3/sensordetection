<!DOCTYPE html>
<html>
<head>
<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
</head>
<body>

<?php
	session_start();
    $user = $_SESSION['user'];
	require_once("functions/function.php");
	get_header();
	get_sidebar_cliente();
	get_bread();
?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Cliente</h2>
				<!--		<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div> -->
					</div>
					<div class="box-content">
                    	 <table class="table table-hover"> 
					<!--	<table class="table table-striped table-bordered bootstrap-datatable datatable">-->
						  <thead>
							  <tr>
								  <th>Nome</th>
                                  <th>Cognome</th>
                                  <th>Data di Nascita</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT * FROM Utente WHERE Username = '$user';";
								$result=mysql_query($sql); //rs.open sql,con

							while ($row=mysql_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['Nome']; ?></td>
                                <td><?php echo $row['Cognome']; ?></td>
                                <td><?php echo $row['DataNascita']; ?></td>
                                <td><?php echo ""; ?></td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Installazioni</h2>
				<!--		<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div> -->
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
                                  <th>Denominazione</th>
                                  <th>Sensori</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT IDInstallazione,Denominazione,count(IDSensore) AS sensore FROM Installazione INNER JOIN Monitoraggio ON IDInstallazione = InstallazioneIDInstallazione INNER JOIN Sensore ON SensoreIDSensore = IDSensore INNER JOIN Utente ON Username = UtenteUsername GROUP BY IDInstallazione ORDER BY UtenteUsername;";
								$result=mysql_query($sql); //rs.open sql,con

							while ($row=mysql_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['IDInstallazione']; ?></td>
                                <td><?php echo $row['Denominazione']; ?></td>
                                <td><?php echo $row['sensore']; ?></td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
    
    </body>
    </html>