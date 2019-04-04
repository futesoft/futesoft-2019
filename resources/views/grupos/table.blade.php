<table class="table table-responsive" id="grupos-table">
    <thead>
        <th>Dia</th>
        <th>Horario Id</th>
        <th>Creado en</th>
        <th>Actualizado en</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($grupos as $grupos)
        <tr>
            <td>{!! $grupos->dia !!}</td>
            <td>{!! $grupos->horario_id !!}</td>
            <td>{!! $grupos->created_at !!}</td>
            <td>{!! $grupos->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['grupos.destroy', $grupos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('grupos.show', [$grupos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('grupos.edit', [$grupos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>