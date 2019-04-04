<table class="table table-responsive" id="horas-table">
    <thead>
        <th>Hora Inicio</th>
        <th>Hora Final</th>
        <th>Creado en</th>
        <th>Actualizado en</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    <?php foreach($horas as $horas): ?>
        <tr>
            <td><?php echo $horas->hora_inicio; ?></td>
            <td><?php echo $horas->hora_final; ?></td>
            <td><?php echo $horas->created_at; ?></td>
            <td><?php echo $horas->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['horas.destroy', $horas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('horas.show', [$horas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('horas.edit', [$horas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>