<?php
include("conexion.php");


include('head.php');



?>
<!DOCTYPE html>
<html lang="es">
<body>
	<!-- Main container -->
<?php
include('menu.php');
?>
		
			<!-- Content -->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off" method="post">
					
				
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Ingresar CI (Nº de Carnet de Identidad)</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="us_ru" value="8324905" maxlength="35" >
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<a href="registrar.php?cod='valor1'" class="btn btn-success">
		  									INGRESAR  <i class="fas fa-sync-alt"></i>	
					</p>
					
				</form>
			</div>
		
<!--  footer   -->
<?php
include('footer.php');
?>
	
</body>
</html>