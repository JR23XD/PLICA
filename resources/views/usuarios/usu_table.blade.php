<div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
  <table class="table table-head-fixed table-hover table-sm table-bordered">
    @if (sizeof($usuario) == 0)
      @include('global.paginador.busquedaSinResultados')
    @else
      <thead>
        <tr>
          <th>{{ __('ID') }}</th>
          <th>{{ __('Nombre') }}</th>
          <th>{{ __('Apellidos') }}</th>
          <th>{{ __('Correo') }}</th>
          <th>{{ __('Rol')}}</th>
          <th colspan="2">&nbsp</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($usuario as $users)
          <tr title="{{ $users->id }}">
            <td with="1rem">{{ $users->id }}</td>
            <td><a href="{{ route('usuarios.show', $users->id) }}"
                 title="Detalles: {{ $users->id }}">{{ $users->name }}</a></td>
            <td>{{ $users->apes }}</td>
            <td>{{ $users->email }}</td> 
            <td>{{$users->nom_role }}</td>
            @include('usuarios.usu_tableOpciones')
          </tr>
        @endforeach
      </tbody>
    @endif
  </table>
</div>
