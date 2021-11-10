<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="name">{{ __('Nombre') }}(s) *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Nombre')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="apes">{{ __('Apellidos') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('apes', null, ['class' => 'form-control' . ($errors->has('apes') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Apellidos')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('apes') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="email">{{ __('Correo') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
      </div>
      {!! Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Correo')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('email') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="password">{{ __('Contraseña') }} *</label>
    <a href="#" class="" data-toggle="modal" data-target="#generar-password" data-backdrop="static" data-keyboard="false">{{ __('Generar Contraseña') }}</a>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
      {!! Form::password('password', ['id' => 'password', 'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'maxlength' => 60, 'placeholder' => __('Contraseña'), 'autocomplete' => 'new-password']) !!}
      <span class="input-group-append">
        <button id="show_password1" class="btn btn-info btn-flat btn-sm" type="button" onclick="mostrarPassword('password', 'show_password1', 'icon1')"><span class="fa fa-eye-slash icon1"></span></button>
      </span>
    </div>
    <span class="text-danger">{{ $errors->first('password') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="password_confirmation">{{ __('Confirmación de contraseña') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
      {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'maxlength' => 60, 'placeholder' => __('Confirmación de contraseña')]) !!}
      <span class="input-group-append">
        <button id="show_password2" class="btn btn-info btn-flat btn-sm" type="button" onclick="mostrarPassword('password_confirmation', 'show_password2', 'icon2')"><span class="fa fa-eye-slash icon2"></span></button>
      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="rol">{{ __('Rol') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      {!! Form::select('rol[]', $roles, null, ['class' => 'form-control select2' . ($errors->has('rol') ? ' is-invalid' : ''), 'multiple']) !!}
    </div>
    <span class="text-danger">{{ $errors->first('rol') }}</span>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm btn-sm">
    <button type="reset"
            class="btn btn-default w-100 p-2"> <i class="fas fa-broom"></i>
      {{ __('Limpiar') }}</button>
  </div>
  <div class="form-group col-sm btn-sm">
    <button type="submit"
            id="btnsubmit"
            class="btn btn-info w-100 p-2"> <i class="fas fa-save"></i>
      {{ __('Guardar') }}</button>
  </div>
</div>


