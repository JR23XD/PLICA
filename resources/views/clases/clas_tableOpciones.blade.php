<td width="1rem" title="Editar: {{ $clases->id }}">
    <a href="{{ route('clases.edit', $clases->id) }}" class='btn btn-light btn-sm'><i class="fas fa-edit"></i></a>
</td>

<td width="1rem" title="Eliminar: {{ $clases->id }}">
    <form method="post" action="{{ route('clases.destroy', $clases->id) }}" id="claseDestroy{{ $clases->id }}">
    @method('DELETE')@csrf
    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'id' => "btnsub$clases->id", 'onclick' => "return check('btnsub$clases->id','claseDestroy$clases->id','¡Alerta!', '¿Estás seguro que quieres realizar esta acción para el registro: $clases->id ($clases->nom) ?', 'info', 'Continuar', 'Cancelar', 'false');"]) !!}
</form>
</td>