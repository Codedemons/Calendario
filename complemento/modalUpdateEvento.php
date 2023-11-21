<div class="modal" id="modalUpdateEvento"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventoUpdate" id="formEventoUpdate" action="complemento/UpdateEvento.php" class="form-horizontal" method="POST">
    <input type="hidden" class="form-control" name="idEvento" id="idEvento">
    <div class="form-group">
      <label for="evento" class="col-sm-12 control-label">Nombre del Evento</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre" required/>
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Hora</label>
      <div class="col-sm-10">
      <input type="time" class="form-control" name="Hora" id="Hora"  min="01:30" max="22:00" >
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Precio</label>
      <div class="col-sm-10">
      <input type="number" class="form-control" name="precio" id="precio" placeholder="0.0" >
      </div>
    </div>
    <div class="col-md-12 activado">
 
      
      
    </div>

    
    <div class="modal-footer">
      	<button type="submit" class="btn btn-success">          
        <i class="material-icons">save</i>
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
        <i class="material-icons">close</i>
        </button>
    	</div>
  </form>
      
    </div>
  </div>
</div>