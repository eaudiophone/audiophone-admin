<!-- Modal de Diagnostico-->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_A_Diagnostic" aria-labelledby="modal15"
aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal15">Agendar cita de diagnostico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
          <form action="" method="post" name="meetingDiagnostic">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-12">
                    <label for="startingTime">Hora de inicio:</label>
                    <input type="time" id="startingTime" name="startingTime" class="form-control" required>
                 </div>
                 <div class="col-md-6 col-sm-12">
                   <label for="appointmentDate">Fecha evento:</label>
                    <input type="date" id="appointmentDate" name="appointmentDate" class="form-control"  
                    disabled>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label for="finalHour">Hora de Finalización:</label>
                    <input type="time" id="finalHour" name="finalHour" class="form-control" required>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label for="totalHours">Total horas:</label>
                   <input type="text" id="totalHours" name="totalHours" class="form-control" disabled>
                  </div>
                </div>
             </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!-- Modal de Rental-->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_A_Rental" aria-labelledby="modal16"
aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal16">Agendar cita de Renta:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
          <!-- Agregar calendario -->
          <form action="" method="post" name="meetingRental">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6 col-sm-12">
                  <label for="startingTime">Hora de inicio:</label>
                  <input type="time" id="startingTime" name="startingTime" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="appointmentDate">Fecha evento:</label>
                  <input type="date" id="appointmentDate" name="appointmentDate" class="form-control" disabled>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="finalHour">Hora de Finalización:</label>
                  <input type="time" id="finalHour" name="finalHour" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="totalHours">Total horas:</label>
                  <input type="text" id="totalHours" name="totalHours" class="form-control" disabled>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="serviceAddress">Dirección del evento:</label>
                  <textarea name="serviceAdress" id="serviceAddress" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!-- Modal de Records-->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_A_Records" aria-labelledby="modal17"
aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal17">Agendar cita de Grabacion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
        <form action="" method="post" name="meetingRecords">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6 col-sm-12">
                  <label for="startingTime">Hora de inicio:</label>
                  <input type="time" id="startingTime" name="startingTime" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="appointmentDate">Fecha evento:</label>
                  <input type="date" id="appointmentDate" name="appointmentDate" class="form-control" disabled>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="finalHour">Hora de Finalización:</label>
                  <input type="time" id="finalHour" name="finalHour" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="totalHours">Total horas:</label>
                  <input type="text" id="totalHours" name="totalHours" class="form-control" disabled>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>