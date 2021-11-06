<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="nom">{{ __('Nombre') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-compact-disc"></i></span>
      </div>
       {!! Form::text('nom', null, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Nombre')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('nom') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="user">{{ __('Profesor') }} *</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
        </div>
          {!! Form::select('user[]', $users, null, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),]) !!}
      </div>
    <span class="text-danger">{{ $errors->first('user') }}</span>
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