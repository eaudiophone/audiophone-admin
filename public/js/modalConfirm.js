function openModalDelete( id, name, url ) {

	var form = document.getElementById( 'formDelete' );

	if ( form.action === '' ) {

		// establece la url
		form.action = `${ url }/${ id }`;
	}

	else {

		form.action = '';
		form.action = `${ url }/${ id }`;
	}

	$( '#modal-delete' ).modal('toggle');
	$( '#titleDelete' ).prop( 'innerHTML', `Eliminar usuario ${ name }` );
		
	// console.log( form.action );
}

function openModalUpdate( id, name, role, url ) {

	var method = 'changeRole';
	var form = document.getElementById( 'formUpdate' );

	if ( form.action === '' ) {

		form.action = `${ url }/${ method }/${ id }`;
	}

	else {

		form.action = '';
		form.action = `${ url }/${ method }/${ id }`;
	}

	$( '#modal-update' ).modal('toggle');
	$( '#titleUpdate' ).prop( 'innerHTML', `Actualizar usuario ${ name }` );

	getRoleUser( role );
}

function getRoleUser( nameRole ) {

	var roleUser = document.getElementById( 'userRole' )[0];
	var option = document.getElementById( 'userRole' )[1];

	if ( nameRole === 'ADMIN_ROLE' ) {

		option.value = 'USER_ROLE';
		option.innerHTML = 'USER_ROLE';
	}

	else {

		option.value = 'ADMIN_ROLE';
		option.innerHTML = 'ADMIN_ROLE';
	}
	
	roleUser.value = nameRole;
	roleUser.innerHTML = nameRole;
	roleUser.selected = true;

}