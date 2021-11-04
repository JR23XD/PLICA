<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="name">{{ __('Nombre') }}(s) *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
       {!! Form::text('name', $usuario->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Nombre')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="apes">{{ __('Apellidos') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('apes', $usuario->apes, ['class' => 'form-control' . ($errors->has('apes') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Apellidos')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('apes') }}</span>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="rol">{{ __('Rol') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      {!! Form::select('rol[]', $roles, $usuario->roles, ['class' => 'form-control select2' . ($errors->has('rol') ? ' is-invalid' : ''), 'multiple']) !!}
    </div>
    <span class="text-danger">{{ $errors->first('rol') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="clase">{{ __('Clase') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      {!! Form::select('clase[]', $clases, $usuario->clases, ['class' => 'form-control select2' . ($errors->has('clase') ? ' is-invalid' : ''), 'multiple']) !!}
    </div>
    <span class="text-danger">{{ $errors->first('clase') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="modalidad">{{ __('Modalidad') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      {!! Form::select('modalidad[]', $modalidads, $usuario->modalidads, ['class' => 'form-control select2' . ($errors->has('modalidad') ? ' is-invalid' : ''),'multiple']) !!}
    </div>
    <span class="text-danger">{{ $errors->first('modalidad') }}</span>
  </div>

</div>
  <div class="form-group col-sm btn-sm">
    <button type="submit" id="btnsubmit" class="btn btn-info w-100 p-2" onclick="return check('btnsubmit', 'usuarioUpdate', '¡Alerta!', '¿Estás seguro quieres actualizar el registro?', 'info', 'Continuar', 'Cancelar', 'false');"><i class="fas fa-save"></i> {{ __('Guardar') }}</button>
  </div>
</div>