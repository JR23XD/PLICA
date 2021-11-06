<div class="row">
    <div class="form-group col-sm btn-sm">
        <label for="nom">{{ __('Nombre') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-compact-disc"></i></span>
            </div>
            {!! Form::text('nom', $clase->nom, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Nombre'), 'readonly' => 'readonly']) !!}
        </div>
    </div>


<div class="form-group col-sm btn-sm">
    <label for="user">{{ __('Profesor') }} *</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
        </div>
        @foreach ($clase->users as $user)
          {!! Form::text('user',$user->name, ['class' => 'form-control disabled' , 'maxlength' => 0, 'placeholder' => __('Profesor'), 'readonly' => 'readonly']) !!}
        @endforeach
        </div>
    <span class="text-danger">{{ $errors->first('user') }}</span>
  </div>
</div>

<div class="row">
<div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
    <table class="table table-head-fixed table-striped table-hover table-sm table-bordered y">
        <thead></thead>
        <thead>
            <tr>
                <th colspan="2" ><center>{{ __('Alumno(s)')}}</center></th>
            </tr>
          <tr>
              <th>{{ __('ID')}}</th>
              <th>{{ __('Nombre')}}</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($clase->users as $user)
          <tr title="{{$user->id}}">
              <td with="1rem">{{$user->id}}</td>
              <td><a href="{{ route('usuarios.show', $user->id) }}" title="Detalles: {{ $user->id }}">{{ $user->name }}</a></td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
</div>
