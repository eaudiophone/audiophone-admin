<center>
	<img src="{{asset( config( 'assets.AVATAR' ) )}}" alt="avatar">
</center>

<div class="card mt-5 mb-5">
						
	<div class="card-header">
		<div class="row">
			<div class="col-sm-6">
				<h5 class="card-title">Datos del usuario</h5>
			</div>
			<div class="col-sm-6 text-right">
				<button class="btn btn-sm btn-secondary" id="editar">Editar Perfil</button>
			</div>
		</div>
		
	</div>
						
	<div class="card-body">

		<form action="" method="POST" id="form">
					
			<!-- campos de seguridad -->
			{{ method_field( 'PUT' ) }}
			{{ csrf_field() }}

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
						<label for="name">Rol de aplicacion:</label>
					</div>
					<div class="col-sm-9">
						<span>USER_ROLE</span>
					</div>
				</div>

				<div class="form-row pt-5 text-center">
					<div class="col-sm-6">
						<button class="btn btn-success" type="submit">
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

<script>

	var form = document.getElementById( 'form' );
	var boton = document.getElementById( 'editar' );

	function activar() {

		for ( var i = 2; i < form.length; i++ ) {

			if ( !form[i].disabled ) {

				form[i].disabled = true;
			}

			else {

				form[i].disabled = false;
			}
		}

	}

	function message() {

		swal({
			title: 'usuario actualizado',
			icon: 'success' 
		});
	}


	document.addEventListener( 'DOMContentLoaded', activar );
	boton.addEventListener( 'click', activar );

	form.addEventListener( 'submit', message );

</script>
