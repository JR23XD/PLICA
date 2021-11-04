<div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
    <table class="table table-head-fixed table-hover table-striped table-sm table-bordered">
      @if(sizeof($pagos) == 0)
        @include('global.paginador.busquedaSinResultados')
      @else 
        <thead>
          <tr>
            <th>{{ __('ID') }}</th>
            <th>{{ __('COMPROBANTE') }}</th>
            <th>{{ __('ESTATUS') }}</th>
            <th>{{ __('MONTO') }}</th>
            <th>{{ __('FORMA') }}</th>
            <th>{{ __('CÓDIGO DE FACTURACIÓN') }}</th>
            <th>{{ __('ESTATUS DE FACTURA') }}</th>
            <th colspan="2">&nbsp</th>
          </tr>
        </thead>
        <tbody> 
          @foreach($pagos as $pago)
            <tr title="{{ $pago->id }}">
              <td width="1rem">{{ $pago->id }}</td>
              <td><a href="{{ route('pagos.show', $pago->id) }}" title="Detalles: {{ $pago->id }}">{{ $pago->com}}</a></td>                                                                       
              <td>{{$pago->est}}</td>
              <td>{{$pago->mon}}</td>
              <td>{{$pago->for}}</td>
              <td>{{$pago->cf}}</td>
              <td>{{$pago->ef}}</td>
              @include('pagos.pago_tableOpciones') 
            </tr>
            @endforeach
        </tbody>
      @endif
    </table>
  </div>