<td width="1rem" title="Editar: {{ $pago->id }}">
    <a href="{{ route('pagos.edit', $pago->id) }}" class='btn btn-light btn-sm'><i class="fas fa-edit"></i></a>
</td>

<td width="1rem" title="Eliminar: {{ $pago->id }}">
    <form method="post" action="{{ route('pagos.destroy', $pago->id) }}" id="pagoDestroy{{ $pago->id }}">
    @method('DELETE')@csrf
    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'id' => "btnsub$pago->id", 'onclick' => "return check('btnsub$pago->id','pagoDestroy$pago->id','¡Alerta!', '¿Estás seguro que quieres realizar esta acción para el registro: $pago->id ($pago->com) ?', 'info', 'Continuar', 'Cancelar', 'false');"]) !!}
    </form>
</td>



