<div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
    <table class="table table-head-fixed table-hover table-striped table-sm table-bordered">
      @if(sizeof($facturas) == 0)
        @include('global.paginador.busquedaSinResultados')
      @else 
        <thead>
          <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Fecha De F.') }}</th>
            <th>{{ __('Nombre o R.S.') }}</th>
            <th>{{ __('Telefono F.') }}</th>
            <th>{{ __('Telefono C.') }}</th>
            <th>{{ __('Calle') }}</th>
            <th>{{ __('No. Int.') }}</th>
            <th>{{ __('No. Ext') }}</th>
            <th>{{ __('Col') }}</th>
            <th>{{ __('CP') }}</th>
            <th>{{ __('Municipio') }}</th>
            <th>{{ __('Estado') }}</th>
            <th>{{ __('Uso de CFDI') }}</th>
            <th>{{ __('Concepto') }}</th>
            <th>{{ __('Comentarios') }}</th>
            <th colspan="2">&nbsp</th>
          </tr>
        </thead>
        <tbody> 
          @foreach($facturas as $factura)
            <tr title="{{ $factura->id }}">
              <td width="1rem">{{ $factura->id }}</td>
              <td><a href="{{ route('facturas.show', $factura->id) }}" title="Detalles: {{ $factura->id }}">{{ $factura->fdf }}</a></td>
              <td>{{$factura->nrs}}</td>
              <td>{{$factura->telf}}</td>
              <td>{{$factura->telc}}</td>
              <td>{{$factura->cal}}</td>
              <td>{{$factura->noi}}</td>
              <td>{{$factura->noe}}</td>
              <td>{{$factura->col}}</td>
              <td>{{$factura->cp}}</td>
              <td>{{$factura->mun}}</td>
              <td>{{$factura->esta}}</td>
              <td>{{$factura->cfdi}}</td>
              <td>{{$factura->conce}}</td>
              <td>{{$factura->comen}}</td>
              @include('facturas.factura_tableOpciones') 
            </tr>
            @endforeach
        </tbody>
      @endif
    </table>
  </div>