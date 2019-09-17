<div class="row pt-2 pb-5">

	<!-- tabla de datos -->
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr id="center">
				<th>id:</th>
				<th>Nombre:</th>
				<th>Correo:</th>
				<th>Rol:</th>
				<th>Accion:</th>
			</tr>
		</thead>
		<tbody id="center">

			@for( $i = 1; $i <= 5; $i++ )
				<tr>
					<td> <strong> {{ $i }} </strong></td>
					<td>test</td>
					<td>test@test.com</td>
					<td>USER_ROLE</td>
					<td>
						<button type="button" class="btn btn-sm btn-warning admin"> 
							<i class="fas fa-w fa-user"></i>
						</button>
						<button class="btn btn-sm btn-danger delete">
							<i class="fas fa-w fa-trash"></i>
						</button>
					</td>
				</tr>
			@endfor

		</tbody>
	</table>
</div>