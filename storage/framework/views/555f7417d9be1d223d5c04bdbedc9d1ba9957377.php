<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $materias->id; ?></p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo $materias->nombre; ?></p>
</div>

<!-- Gestion Field -->
<div class="form-group">
    <?php echo Form::label('gestion', 'Docente:'); ?>

    <p><?php echo $materias->gestion; ?></p>
</div>

<!-- Grupo Id Field -->
<div class="form-group">
    <?php echo Form::label('grupo_id', 'Grupo Id:'); ?>

    <p><?php echo $materias->grupo_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $materias->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $materias->updated_at; ?></p>
</div>

