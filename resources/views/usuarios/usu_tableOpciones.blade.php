<td width="1rem" title="Editar: {{ $users->id }}">
    <a href="{{ route('usuarios.edit', $users->id) }}" class='btn btn-light btn-sm'><i class="fas fa-edit"></i></a>
</td>
@can(['usuarios.create', 'usuarios.show', 'usuarios.edit', 'usuarios.destroy'])
<td width="1rem" title="Eliminar: {{ $users->id }}">
    <form method="post" action="{{ route('usuarios.destroy', $users->id) }}" id="usuarioDestroy{{ $users->id }}">
        @method('DELETE')@csrf
        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'id' => "btnsub$users->id", 'onclick' => "return check('btnsub$users->id','usuarioDestroy$users->id','¡Alerta!', '¿Estás seguro que quieres realizar esta acción para el registro: $users->id ($users->name) ?', 'info', 'Continuar', 'Cancelar', 'false');"]) !!}
    </form>
</td>
@endcan