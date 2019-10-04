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

function openModalUpdate( id, name, url ) {

	var method = 'changeRole';

	var role = document.getElementById( 'role' ).innerHTML;
	var form = document.getElementById( 'formUpdate' );

	if ( form.action === '' ) {

		// establece la url
		form.action = `${ url }/${ method }/${ id }`;
	}

	else {

		form.action = '';
		form.action = `${ url }/${ method }/${ id }`;
	}

	$( '#modal-update' ).modal('toggle');
	$( '#titleUpdate' ).prop( 'innerHTML', `Actualizar usuario ${ name }` );

	// console.log( form.action );

	getRoleUser( role );
}

function getRoleUser( nameRole ) {

	var roleUser = document.getElementById( 'userRole' )[0];
	
	roleUser.value = nameRole;
	roleUser.innerHTML = nameRole;

	console.log( roleUser );
}