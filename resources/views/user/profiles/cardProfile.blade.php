<div class="card mt-5 mb-5">
						
	<div class="card-header">
		<h5 class="card-title">Datos del usuario</h5>
	</div>
						
	<div class="card-body">

		<form action="">
								
			<div class="form-group">
				<div class="form-row">
										
					<div class="col-sm-3">
						<label for="name">nombre:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" id="name" name="name" class="form-control"
						placeholder="nombre ..." required autofocus
						pattern="[A-Z a-z]*" title="solo letras"
						maxlength="25">		
					</div>
				</div>	

				<div class="form-row pt-3">
										
					<div class="col-sm-3">
						<label for="name">correo:</label>
					</div>
					<div class="col-sm-9">
						<input type="email" id="name" name="name" class="form-control"
						placeholder="correo ..." required autofocus>		
					</div>
				</div>	

				<div class="form-row pt-3">
										
					<div class="col-sm-3">
						<label for="name">Nueva contraseña:</label>
					</div>
					<div class="col-sm-9">
						<input type="password" id="name" name="name" class="form-control"
						required autofocus minlength="8" placeholder="contraseña ...">		
					</div>
				</div>

				<div class="form-row pt-3 text-center">
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success">
							<i class="fas fa-w fa-save"></i>		
							Guardar cambios
						</button>
					</div>
					<div class="col-sm-6">
						<button type="reset" class="btn btn-default">
							<i class="fas fa-w fa-times"></i>
							Cancelar
						</button>
					</div>
				</div>	

				</div>
			</div>

		</form>
	</div>
</div>