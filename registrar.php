<?php
include("conexion.php");


include('head.php');

$v1 = $_GET['cod'];
echo $v1;

//actualizar el usuario

if (isset($_POST["insertar"])) 
{
	
	$us_ci = $_POST["ci"];	
	
	
	 
		// Hubieron resultados
		// Aqui ya puedo utilizar el mysqli_fetch_array() sin reparo
		$nom=$_POST['us_nombre'];
		$pat=$_POST['us_pat'];
		$mat=$_POST['us_mat'];
		$cel=$_POST['us_celular'];
		$dir=$_POST['us_direccion'];
		$email=$_POST['us_email'];

		$sql="update persona set nombres='$nom', apellido_p='$pat', apellido_m='$mat', celular='$cel', email='$email', direccion='$dir' where ci='".$us_ci."'";
		
		if(mysqli_query($conexion,$sql)){
			echo "<script>
				alert('Actualizado correctamente');
				</script>";	
				
	}else{
		echo "<script>
				alert('usuario existente o no valido');
				</script>";	
    }  
}
?>
<!DOCTYPE html>
<html lang="es">
<body>
	<!-- Main container -->
<?php
include('menu.php');
?>

            <?php
				$consulta="SELECT 		 
                            FROM 
                            WHERE u.ci=p.ci AND u.ci='".$_GET["cod"]."';";
                $res = mysqli_query($conexion,$consulta);
                $fila = mysqli_fetch_array($res);
			?>
		
			<!-- Content -->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off" method="post">
					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_ci" class="bmd-label-floating">CI</label>
										<input type="text" pattern="[0-9-]{1,20}" class="form-control" name="ci" id="ci" value="<?php echo $fila[0] ?>" maxlength="20" readonly>
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_nombre" class="bmd-label-floating">Nombres</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="us_nombre" value="<?php echo $fila[1] ?>" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_apellido" class="bmd-label-floating">Apellido Paterno</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="us_pat" value="<?php echo $fila[2] ?>" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_apellido" class="bmd-label-floating">Apellido Materno</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="us_mat" value="<?php echo $fila[3] ?>" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_telefono" class="bmd-label-floating">Celular</label>
										<input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="us_celular" value="<?php echo $fila[4] ?>" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_direccion" class="bmd-label-floating">Dirección</label>
										<input type="text" pattern="[a-zA-Z0-99áéíóúÁÉÍÓÚñÑ()# ]{1,190}" class="form-control" name="us_direccion" value="<?php echo $fila[7] ?>" maxlength="190">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_usuario" class="bmd-label-floating">Registro de usuario</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="us_ru" value="<?php echo $fila[5] ?>" maxlength="35" readonly>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_email" class="bmd-label-floating">Email</label>
										<input type="email" class="form-control" name="us_email" id="us_email" value="<?php echo $fila[6] ?>" maxlength="170">
									</div>
								</div>
								
							</div>
						</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm" name="insertar" id="insertar"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
                        
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