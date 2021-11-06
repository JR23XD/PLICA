<div class="row">
  <div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
      <table class="table table-head-fixed table-striped table-hover table-sm table-bordered y">
          <thead>
              <tr>
                  <th colspan="7" > <a href="{{route('horarios.create',[$clase->id])}}"><center>{{ __('Horarios')}} </center></a></th>
              </tr>
            <tr>
                <th>{{ __('ID')}}</th>
                <th>{{ __('Inicio')}}</th>
                <th>{{ __('Fin')}}</th>
                <th>{{ __('Tipo de Clase')}}</th>
                <th>{{ __('Modalidad')}}</th>
                <th colspan="2">&nbsp</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($clase->horarios as $horario)
          <tr title="{{$horario->id}}">
          <td with="1rem">{{$horario->id}}</td>
          <td>{{ $horario->fhi }}</td>
          <td>{{ $horario->fhf }}</td>
          <td>{{ $horario->tip }}</td>
          <td>{{ $horario->mod}}</td>
          @include('clases.hor_tableOpciones')
           </tr>
           @endforeach
        </tbody>
        </table>
      </div>
  </div>
  








</div>
<div class="form-group col-sm btn-sm">
    <button type="submit" id="btnsubmit" class="btn btn-info w-100 p-2"
        onclick="return check('btnsubmit', 'claseUpdate', '¡Alerta!', '¿Estás seguro quieres actualizar el registro?', 'info', 'Continuar', 'Cancelar', 'false');"><i
            class="fas fa-save"></i> {{ __('Guardar') }}</button>
</div>
