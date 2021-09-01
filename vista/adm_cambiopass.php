<?php 
session_start();
if ($_SESSION['us_tipo']==1||$_SESSION['us_tipo']==3){
	include_once 'layouts/header.php';
?>
	  <title>Adm|Editar Datos</title>
	  <!-- Tell the browser to be responsive to screen width -->
		<?php 
			include_once 'layouts/nav.php';
		 ?>

	<!-- ModalCambioContrasena -->
	<div class="modal fade" id="cambiocontra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="text-center">
	        	<img id="avatar3" src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
	        </div>
	        <div class="text-center">
	        	<b>
	        		<?php 
	        			echo $_SESSION['nombre_us'];
	        		 ?>
	        	</b>
	        </div>
	        <div class="alert alert-black text-center" id="update" style="display: none;">
	        	<span><i class="fas fa-check m-1"></i>Se cambio la contraseña correctamente</span>
	        </div>
	        <div class="alert alert-danger text-center" id="noupdate" style="display: none;">
	        	<span><i class="fas fa-times m-1"></i>La contraseña no es correcto</span>
	        </div>
	        <form id="form-pass" >
	        	<div class="input-group mb-3">
	        		<div class="input-group-prepend">
	        			<span class="input-group-text"> <!--<i class="fas fa-unlock-alt"></i>--></span>
	        		</div>
	        		<input id="oldpass" type="password" class="form-control" placeholder="Ingrese contraseña actual">
	        	</div>
	        	<div class="input-group mb-3">
	        		<div class="input-group-prepend">
	        			<span class="input-group-text"> <!--<i class="fas fa-lock"> </i> --></span>
	        		</div>
	        		<input id="newpass" type="text" class="form-control" placeholder="Ingrese contraseña nueva">
	        	</div>	
	        	<div class="modal-footer">
			        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="submit" class="btn bg-gradient- black">Guardar</button>	    	
	     		 </div>        	        	
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
<!-- ModalCambioFoto -->
	<div class="modal fade" id="cambiophoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-header" id="exampleModalLabel">Cambiar Imagen</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="text-center">
	        	<img id="avatar1" src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
	        </div>
	        <div class="text-center">
	        	<b>
	        		<?php 
	        			echo $_SESSION['nombre_us'];
	        		 ?>
	        	</b>
	        </div>
	        <div class="alert alert-success text-center" id="edit" style="display: none;">
	        	<span><i class="fas fa-check m-1"></i>Se cambio la imagen</span>
	        </div>
	        <div class="alert alert-danger text-center" id="noedit" style="display: none;">
	        	<span><i class="fas fa-times m-1"></i>Formato no Soportado</span>
	        </div>
	        <form id="form-photo" enctype="multipart/form-data">
	        	<div class="input-group mb-3 ml-5 mt-2">
	        		<input type="file" name="photo" class="input-group">
	        		<input type="hidden" name="funcion" value="cambiar_foto">
	        	</div>	        	
	        	<div class="modal-footer">
			        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="submit" class="btn bg-gradient-primary">Guardar</button>	    	
	     		 </div>        	        	
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>

	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-12">
	          <div class="col-sm-12">
	             <h2>Configuracion de usuario</h2>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>	
	    <section>
	    	<div class="content center">
	    		<div class="container center">
	    			<div class="row">
	    				<div class="col-sm-12">
	    					<div class="card card-dark card-outline">
	    						<div class="card-body box-profile">
	    					<!--		<div class="text-center">
	    								<img id="avatar2" src="../img/avatar.png" class="profile-user-img img-fluid img-circle">						
	    							</div> -->
	    					<!--		<div class="text-center mt-6">
	    								<button type='button' data-toggle="modal" data-target="#cambiophoto" class="btn btn-primary btn-sm">Cambiar Imagen</button>
	    							</div> -->
	    							<input type="hidden" id="id_usuario" value="<?php echo $_SESSION['usuario']?>">
	    							<div class="card">
										<div class="card-body">
										<h3 id="nombre_us" class="profile-username text-center text-dark">Nombre</h3>
										<p id="apellidos_us" class="text-muted text-center">Apellidos</p>
											<p class="card-text"></p>
										</div>
										<div class="card-footer">
										</div>
									</div>	
									<ul class="list-group list-group-unbordered mb-3">
	    									<li class="list-group-item">
	    										<b style="color:#008C7D">Edad</b><a id="edad" class="float-right"></a>
	    									</li>
	    									<li class="list-group-item">
	    										<b style="color:#008C7D">C.I</b><a id="dni_us" class="float-right"></a>
	    									</li>
	    									<li class="list-group-item">
	    										<b style="color:#008C7D">Tipo Usuario</b>
	    										<span id="us_tipo" class="float-right"></span>
	    									</li>	    									
											<button data-toggle="modal" data-target="#cambiocontra" type="button" class="btn btn-dark btn-sm">Cambiar password</button>
	    							</ul>
	    						</div>
	    					</div>
							<div class="content center">
	    		
	    				<div class="col-md-12">
	    					
	    						
	    							</form>
	    						</div>
	    						
	    					</div>	    					
	    				</div>	    				
	    			</div>
	    		</div>
	    	</div>
	    </section>    	   
	  </div>
	  <!-- /.content-wrapper -->

	  
<?php 
	include_once 'layouts/footer.php';
}
else{
header('Location:../index.php');
}

?>
 <script src="../js/Usuario.js"></script>
