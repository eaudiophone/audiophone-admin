//funciones para activar y desactivar formularios
function activateProfile() {
    //activa los formularios del perfil
    document.formUser.firstName.disabled = false;
    document.formUser.lastName.disabled = false;
    document.formUser.codePhone.disabled = false;
    document.formUser.cellPhone.disabled = false;
    document.formUser.boton1.disabled = false;
    document.formUser.boton2.disabled = false;
}

function activatePassword() {
    //activa los formularios de la cuenta
    document.formAccounts.email.disabled = false;
    document.formAccounts.password.disabled = false;
    document.formAccounts.boton3.disabled = false;
    document.formAccounts.boton4.disabled = false;
}