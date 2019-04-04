<table class="table table-responsive" id="materias-table">
    <thead>
        <th>Nombre</th>
        <th>Docente</th>
        <th>Grupo Id</th>
        <th>Creado en</th>
        <th>Actualizado en</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    <?php foreach($materias as $materias): ?>
        <tr>
            <td><?php echo $materias->nombre; ?></td>
            <td><?php echo $materias->gestion; ?></td>
            <td><?php echo $materias->grupo_id; ?></td>
            <td><?php echo $materias->created_at; ?></td>
            <td><?php echo $materias->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['materias.destroy', $materias->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('materias.show', [$materias->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('materias.edit', [$materias->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>