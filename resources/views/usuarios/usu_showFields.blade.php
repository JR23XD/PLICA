<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="nombre">{{ __('Nombre') }}(s)</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('nombre', $usuario->name, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Nombre'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="apes">{{ __('Apellidos') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('apellidos', $usuario->apes, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Apellidos'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="email">{{ __('Correo') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
      </div>
      {!! Form::text('email', $usuario->email, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Email'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="created_at">{{ __('Creado el:') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-edit"></i></span>
      </div>
      {!! Form::text('created_at', $usuario->created_at, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Creado el'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="updated_at">{{ __('Editado el:') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-edit"></i></span>
      </div>
      {!! Form::text('updated_at', $usuario->updated_at, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Editado el'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="rol">{{ __('Rol') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      <select name="rol"  class="form-control select2 disabled" multiple readonly>
        @foreach ($usuario->roles as $rol)
          <option selected>{{ $rol->nom }}</option>
        @endforeach
      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
      <table class="table table-head-fixed table-striped table-hover table-sm table-bordered y">
          <thead></thead>
          <thead>
              <tr>
                  <th colspan="7" ><center>{{ __('Clase(s)')}}</center></th>
              </tr>
            <tr>
                <th>{{ __('ID')}}</th>
                <th>{{ __('Clase')}}</th>
                <th>{{ __('Inicio')}}</th>
                <th>{{ __('Fin')}}</th>
                <th>{{ __('Tipo de Clase')}}</th>
                <th>{{ __('Modalidad')}}</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
              <td></td>
              <td></td>
              @foreach ($usuario->horarios as $horario)
                <td>{{$horario->fhi }}</td>
                <td>{{$horario->fhf}}</td>
                <td>{{$horario->tip}}</td>
                <td>{{$horario->mod}}</td>
                @endforeach
            </tr>
         
        </tbody>
        </table>
      </div>
  </div>