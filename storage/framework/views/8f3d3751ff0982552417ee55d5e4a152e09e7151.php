<!-- Dia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dia', 'Dia:'); ?>

    <?php echo Form::select('dia', ['0' => 'Lunes', '1' => 'Martes', '2' => 'Miercoles', '3' => 'Jueves', '4' => 'Viernes', '5' => 'Sabado', '6' => 'Domingo'], null, ['class' => 'form-control']); ?>

</div>

<!-- Horario Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('horario_id', 'Horario Id:'); ?>

    <?php echo Form::select('horario_id', $horas, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('grupos.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
