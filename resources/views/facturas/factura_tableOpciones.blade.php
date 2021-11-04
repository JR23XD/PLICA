<td width="1rem" title="Editar: {{ $factura->id }}">
    <a href="{{ route('facturas.edit', $factura->id) }}" class='btn btn-light btn-sm'><i class="fas fa-edit"></i></a>
</td>

<td width="1rem" title="Eliminar: {{ $factura->id }}">
    <form method="post" action="{{ route('facturas.destroy', $factura->id) }}" id="facturaDestroy{{ $factura->id }}">
    @method('DELETE')@csrf
    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'id' => "btnsub$factura->id", 'onclick' => "return check('btnsub$factura->id','facturaDestroy$factura->id','¡Alerta!', '¿Estás seguro que quieres realizar esta acción para el registro: $factura->id ($factura->nom) ?', 'info', 'Continuar', 'Cancelar', 'false');"]) !!}
    </form>
</td>






  