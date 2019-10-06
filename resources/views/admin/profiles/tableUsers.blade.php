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

			@forelse( $users as $user )
				<tr>
					<td> <strong>{{ $user->id }}</strong></td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td id="role">{{ $user->role }}</td>
					<td>
						<button type="button" class="btn btn-sm btn-warning"
						onclick="openModalUpdate( {{ $user->id }}, '{{ $user->name }}',
						'{{ $user->role }}', '{{ url( 'account' ) }}' )"> 
							<i class="fas fa-w fa-user"></i>
						</button>
						<button class="btn btn-sm btn-danger delete" 
							onclick="openModalDelete( {{ $user->id }}, '{{ $user->name }}',
							'{{ url( 'account' ) }}' )"> 
							<i class="fas fa-w fa-trash"></i>
						</button>
					</td>
				</tr>
				@empty
					<div>
						<p>No se hallaron registros</p>
					</div>
			@endforelse
		</tbody>
	</table>
</div>

<script src="{{ asset( config( 'assets.MODAL_CONFIRM' ) ) }}"></script>

@include( 'admin/profiles/modalConfirm' )
