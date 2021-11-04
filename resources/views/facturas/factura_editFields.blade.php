<div class="row">  
  <div class="form-group col-sm btn-sm">
    <label for="nom">{{ __('Nombre') }}*</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
          {!! Form::text('nom', $instrumentos->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('nombre')]) !!}
      </div>
      <span class="text-danger">{{ $errors->first('nom') }}</span>
    </div>
</div>
    <div class="row">
      <div class="form-group col-sm btn-sm">
        <button type="submit" id="btnsubmit" class="btn btn-info w-100 p-2" onclick="return check('btnsubmit', 'instrumentoUpdate', '¡Alerta!', '¿Estás seguro quieres actualizar el registro?', 'info', 'Continuar', 'Cancelar', 'false');"><i class="fas fa-save"></i> {{ __('Guardar') }}</button>
      </div>
    </div>


