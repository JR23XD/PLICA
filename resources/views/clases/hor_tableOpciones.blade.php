<td width="1rem" title="Eliminar: {{ $horario->id }}">
  <form method="post" action="{{ route('horarios.destroy', $horario->id) }}" id="horarioDestroy{{ $horario->id}}">
      @method('DELETE')@csrf
      {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'id' => "btnsub$horario->id", 'onclick' => "return check('btnsub$horario->id','horarioDestroy$horario->id','¡Alerta!', '¿Estás seguro que quieres realizar esta acción para el registro: $horario->id ($horario->id) ?', 'info', 'Continuar', 'Cancelar', 'false');"]) !!}
  </form>
</td>