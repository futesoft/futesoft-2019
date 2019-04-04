<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $horas->id; ?></p>
</div>

<!-- Hora Inicio Field -->
<div class="form-group">
    <?php echo Form::label('hora_inicio', 'Hora Inicio:'); ?>

    <p><?php echo $horas->hora_inicio; ?></p>
</div>

<!-- Hora Final Field -->
<div class="form-group">
    <?php echo Form::label('hora_final', 'Hora Final:'); ?>

    <p><?php echo $horas->hora_final; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $horas->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $horas->updated_at; ?></p>
</div>

