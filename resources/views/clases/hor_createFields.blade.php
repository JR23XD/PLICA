<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="user">{{ __('Alumno') }} *</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
        </div>
          {!! Form::select('user[]', $users, null, ['class' => 'form-control select2' . ($errors->has('user') ? ' is-invalid' : ''), 'multiple']) !!}
      </div>
    <span class="text-danger">{{ $errors->first('user') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="fhi">{{ __('Inicio de Clase') }}</label>
      <div class="form-group">
         <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
          <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
              {!! Form::text('fhi',null,['class'=>'form-control datetimepicker-input'. ($errors->has('fhi') ? ' is-invalid' : ''),'data-target'=>'#datetimepicker7']) !!}
          </div>
          <span class="text-danger">{{ $errors->first('fhi') }}</span>
      </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="fhf">{{ __('Fin de Clase') }}</label>
      <div class="form-group">
         <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
          <div class="input-group-append" data-target="#datetimepicker8" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
              {!! Form::text('fhf',null,['class'=>'form-control datetimepicker-input' .  ($errors->has('fhf') ? ' is-invalid' : '') , 'data-target'=>'#datetimepicker8' ]) !!}
          </div>
          <span class="text-danger">{{ $errors->first('fhf') }}</span>
      </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="mod">{{ __('Modalidad') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      {!! Form::select('mod', [''=>'seleccionar', 'Linea'=>'Linea', 'Domicilio'=>'Domicilio','Local'=>'Local'], null, ['class' => 'form-control' . ($errors->has('mod') ? ' is-invalid' : '')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('modalidad') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="tip">{{ __('Tipo de Clase') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-object-group"></i></span>
      </div>
      {!! Form::select('tip', [''=>'seleccionar', 'Individual'=>'Individual', 'Grupo'=>'Grupo'], null, ['class' => 'form-control' . ($errors->has('tip') ? ' is-invalid' : '')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('tip') }}</span>
  </div>
</div>

<div class="row">
    <div class="form-group col-sm btn-sm">
      <button type="reset" class="btn btn-default w-100 p-2"> <i class="fas fa-broom"></i>{{ __('Limpiar') }}</button>
    </div>
  <div class="form-group col-sm btn-sm">
    <button type="submit" id="btnsubmit" class="btn btn-info w-100 p-2"> <i class="fas fa-save"></i> {{ __('Guardar') }}</button>
  </div>
</div>
