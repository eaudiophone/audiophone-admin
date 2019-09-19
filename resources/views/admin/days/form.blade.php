<div class="form-row">
	<div class="col-sm-4">
		<label for="">Cantidad de citas semanales</label>
	</div>
	<div class="col-sm-8">
		<input type="number" min="1" class="form-control">
	</div>
</div>

<div class="form-row pt-3">
	<div class="col-sm-4">
		<label for="">Cantidad de citas mensuales</label>
	</div>
	<div class="col-sm-8">
		<input type="number" min="1" class="form-control">
	</div>
</div>

<div class="form-row pt-3">
	<div class="col-sm-4">
		<label for="">Días de citas</label>
	</div>
	<div class="col-sm-8">
		<select name="" id="" class="form-control">
			<option value="" selected>Selecione</option>
			<option value="">Toda la semana</option>
			<option value="">Fin de semana</option>
			<option value="">Entre semana</option>
		</select>
	</div>
</div>

<div class="form-row pt-3">

	<div class="col-sm-4">
		<label for="">Hora de inicio</label>
	</div>
	<div class="col-sm-4">
		 <div class="input-group clockpicker">
            <input id="beginHour" class="form-control" type="text">
        </div>
	</div>

	<div class="col-sm-2">
        <label for="">Hora de inicio:</label> 
      </div>
      <div class="col-sm-2">
        <div class="input-group clockpicker">
          <input id="finalHour" type="text" class="form-control">  
        </div>
      </div>
</div>