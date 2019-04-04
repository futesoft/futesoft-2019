<table class="table table-responsive" id="usuarios-table">
    <thead>
        <th>Tipo Usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Codigo Sis</th>
        <th>Direccion</th>
        <th>Cedula</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Creado en</th>
        <th>Actualizado en</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    <?php foreach($usuarios as $usuarios): ?>
        <tr>
            <td><?php echo $usuarios->tipo_usuario; ?></td>
            <td><?php echo $usuarios->nombre; ?></td>
            <td><?php echo $usuarios->apellido; ?></td>
            <td><?php echo $usuarios->codigo_sis; ?></td>
            <td><?php echo $usuarios->direccion; ?></td>
            <td><?php echo $usuarios->cedula; ?></td>
            <td><?php echo $usuarios->telefono; ?></td>
            <td><?php echo $usuarios->email; ?></td>
            <td><?php echo $usuarios->created_at; ?></td>
            <td><?php echo $usuarios->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('usuarios.show', [$usuarios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('usuarios.edit', [$usuarios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>