<!-- Modal Item presupuesto diagnostico-->
<div class="modal fade" tabindex="-1" role="dialog" id="budget01" aria-labelledby="modal15" 
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Presupuesto de Diagnostico</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>    
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form action="" method="POST">
                    <div class="form-row">
                        <label for="itemName" class="col-md-2 col-form-label">Servicio:</label>
                        <div class="col-md-10 form-group">
                            <input type="text" name="itemName" id="itemName"
                            class="form-control" maxlength="20" minlength="8" 
                            pattern="[A-Z a-z]+" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="description" class="col-md-2 col-form-label">Descripción:</label>
                        <div class="col-md-10 form-group">
                            <textarea name="description" id="description" maxlength="100" minlength="10"
                            pattern="[A-Z a-z 0-9]+" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="costUnit" class="col-md-2 col-form-label">Costo elemento:</label>
                        <div class="col-md-10 form-group">
                            <input type="text" name="costUnit" class="form-control" pattern="[0-9]+"
                            maxlength="10" minlength="1" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary">Salvar cambios</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Item presupuesto renta -->
<div class="modal fade" tabindex="-1" role="dialog" id="budget02" aria-labelledby="modal16" 
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Presupuesto de Renta</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>    
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form action="" method="POST">
                    <div class="form-row">
                        <label for="itemName" class="col-md-2 col-form-label">Nombre articulo:</label>
                        <div class="col-md-10 form-group">
                            <input type="text" name="itemName" id="itemName"
                            class="form-control" maxlength="20" minlength="8" 
                            pattern="[A-Z a-z]+" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="description" class="col-md-2 col-form-label">Descripción:</label>
                        <div class="col-md-10 form-group">
                            <textarea name="description" id="description" maxlength="100" minlength="10"
                            pattern="[A-Z a-z 0-9]+" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="costUnit" class="col-md-2 col-form-label">Costo elemento:</label>
                        <div class="col-md-10 form-group">
                            <input type="text" name="costUnit" class="form-control" pattern="[0-9]+"
                            maxlength="10" minlength="1" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary">Salvar cambios</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Item presupuesto grabación -->
<div class="modal fade" tabindex="-1" role="dialog" id="budget03" aria-labelledby="modal17" 
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Presupuesto de Grabación</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>    
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form action="" method="POST">
                    <div class="form-row">
                        <label for="costUnit" class="col-md-2 col-form-label">Tarifa por hora:</label>
                        <div class="col-md-10 form-group">
                            <input type="text" name="costUnit" class="form-control" pattern="[0-9]+"
                            maxlength="10" minlength="1" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary">Salvar cambios</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>