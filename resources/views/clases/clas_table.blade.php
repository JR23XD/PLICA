<div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
  <table class="table table-head-fixed table-hover table-sm table-bordered">
    @if(sizeof($clase) == 0)
    @include('global.paginador.busquedaSinResultados')   
    @else
    <thead>
        <tr>
            <th>{{ __('ID')}}</th>
            <th>{{ __('Nombre')}}</th>
            <th colspan="2">&nbsp</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($clase as $clases)
        <tr title="{{$clases->id}}">
            <td with="1rem">{{$clases->id}}</td>
            <td><a href="{{ route('clases.show', $clases->id) }}" title="Detalles: {{ $clases->id }}">{{ $clases->nom }}</a></td>
            @include('clases.clas_tableOpciones') 
        </tr>
      @endforeach
    </tbody>
      @endif
    </table>
  </div>
  