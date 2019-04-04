<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Gestion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('gestion', 'Docente:'); ?>

    <?php echo Form::text('gestion', null, ['class' => 'form-control']); ?>

</div>

<!-- Grupo Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('grupo_id', 'Grupo Id:'); ?>

    <?php echo Form::select('grupo_id', $grupos, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#myModal']); ?>

    <a href="<?php echo route('materias.index'); ?>" class="btn btn-default">Cancelar</a>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content secondary">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title ">Dato Guardado</h1>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>