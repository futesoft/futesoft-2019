<table class="table table-responsive" id="grupos-table">
    <thead>
        <th>Dia</th>
        <th>Horario Id</th>
        <th>Creado en</th>
        <th>Actualizado en</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    <?php foreach($grupos as $grupos): ?>
        <tr>
            <td><?php echo $grupos->dia; ?></td>
            <td><?php echo $grupos->horario_id; ?></td>
            <td><?php echo $grupos->created_at; ?></td>
            <td><?php echo $grupos->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['grupos.destroy', $grupos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('grupos.show', [$grupos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('grupos.edit', [$grupos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>