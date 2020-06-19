<!DOCTYPE html>
<html lang="es">
<?php
include('head.php');
//inicio de sesion
include("conexion.php");
session_start();
if(!isset($_SESSION["id_administrador"])){ //Si no ha iniciado sesión redirecciona a index.php
	header("Location: principal.php");
}

$id_admin= $_SESSION['id_administrador'];
//echo $id_admin;

//fin de inicio de sesion

?>
<body>
	
<!-- Main container -->
	
<?php
include('menu.php');
?>
		
	<!-- Content -->
			
	<!-- Content here-->
            <div class="container-fluid">
				<form action="reporteprestamosfecha.php" class="form-neon" autocomplete="off" method="post">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Reporte por fechas</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="editorial_id" class="bmd-label-floating">fecha inicio</label><br>
										<input type="date" class="form-control" name="ini_fecha" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="editorial_nombre" class="bmd-label-floating">fecha final</label><br>
										<input type="date" class="form-control" name="fin_fecha" required>	
									</div>
								</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-info btn-sm" name="insertar" id = "insertar"><i class="far fa-save"></i> &nbsp; GENERAR</button>
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						
					</p>
				</form>
			</div>	

		</section>
	</main>
<!--  footer   -->
<?php
include('footer.php');
?>
	
</body>
</html>