<!-- Tipo Usuario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_usuario', 'Tipo Usuario:'); ?>

    <?php echo Form::select('tipo_usuario', ['Administrador' => 'Administrador', 'Docente' => 'Docente', 'Auxiliar' => 'Auxiliar', 'Estudiante' => 'Estudiante'], null, ['class' => 'form-control']); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellido', 'Apellido:'); ?>

    <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Cedula Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cedula', 'Cedula:'); ?>

    <?php echo Form::text('cedula', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Codigo Sis Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('codigo_sis', 'Codigo Sis:'); ?>

    <?php echo Form::text('codigo_sis', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Repetir Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#myModal']); ?>

    <a href="<?php echo route('usuarios.index'); ?>" class="btn btn-default">Cancel</a>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content secondary">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title ">Dato Guardado</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>