<div style="height:30px; background: transparent;">
    <hr style="display:none;" />
</div>
<div class="container">
    <div class="row">
      <form role="form" action="<?php echo Yii::app()->createUrl('/notas/altaNota') ?>" method="post" >
        <d1iv class="col-lg-6">
          <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Los campos acompañados de este símbolo son obligatorios.</strong></div>
          <div class="form-group">
            <label for="InputNombre">Nombre Nota:</label>
            <div class="input-group">
              <input type="text" class="form-control" name="InputNombre" id="InputNombre" placeholder="Introduce aquí el nombre de la nota" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
          </div>
          <div class="form-group">
            <label for="InputDescripcion">Descripción de la Nota</label>
            <div class="input-group">
                <textarea name="InputDescripcion" id="InputDescripcion" class="form-control" rows="4" cols="76" ></textarea>
              <span class="input-group"></span></div>
          </div>

          <input type="submit" name="Insertar" id="Insertar" value="Insertar" class="btn btn-primary pull-right">
          
        </div>
      </form>
      <hr class="featurette-divider hidden-lg">
</div>
