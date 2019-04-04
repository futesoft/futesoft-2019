<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $grupos->id; ?></p>
</div>

<!-- Dia Field -->
<div class="form-group">
    <?php echo Form::label('dia', 'Dia:'); ?>

    <p><?php echo $grupos->dia; ?></p>
</div>

<!-- Horario Id Field -->
<div class="form-group">
    <?php echo Form::label('horario_id', 'Horario Id:'); ?>

    <p><?php echo $grupos->horario_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $grupos->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $grupos->updated_at; ?></p>
</div>

