<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="fdf">{{ __('Fecha de facturacion') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
      </div>
       {!! Form::text('fdf', null, ['class' => 'form-control' . ($errors->has('fdf') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Fecha de facturacion')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('fdf') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="nrs">{{ __('Nombre o razón social') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
      </div>
       {!! Form::text('nrs', null, ['class' => 'form-control' . ($errors->has('nrs') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Nombre  razón social')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('nrs') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="telf">{{ __('Telefono fijo') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
      </div>
       {!! Form::text('telf', null, ['class' => 'form-control' . ($errors->has('telf') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Telefono fijo')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('telf') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="telc">{{ __('Telefono Celular') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
      </div>
       {!! Form::text('telc', null, ['class' => 'form-control' . ($errors->has('telc') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Telelfono Celular')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('telc') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="cal">{{ __('Calle') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-road"></i></span>
      </div>
       {!! Form::text('cal', null, ['class' => 'form-control' . ($errors->has('cal') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Calle')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('cal') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="noi">{{ __('Numero Interior') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
      </div>
       {!! Form::text('noi', null, ['class' => 'form-control' . ($errors->has('noi') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Numero Interior')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('noi') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="noe">{{ __('Numero Exterior') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
      </div>
       {!! Form::text('noe', null, ['class' => 'form-control' . ($errors->has('noe') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Numero Exterior')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('noe') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="col">{{ __('Colonia') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-building"></i></span>
      </div>
       {!! Form::text('col', null, ['class' => 'form-control' . ($errors->has('col') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Colonia')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('col') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="cp">{{ __('Código Postal') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
      </div>
       {!! Form::text('cp', null, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Código Postal')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('cp') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="mun">{{ __('Municipio') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-city"></i></span>
      </div>
       {!! Form::text('mun', null, ['class' => 'form-control' . ($errors->has('mun') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Municipio')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('mun') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="esta">{{ __('Estado') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
      </div>
       {!! Form::text('esta', null, ['class' => 'form-control' . ($errors->has('esta') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Estado')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('esta') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="cfdi">{{ __('Uso de CFDI') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
      </div>
       {!! Form::text('cfdi', null, ['class' => 'form-control' . ($errors->has('cfdi') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Uso de CFDI')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('cfdi') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="conce">{{ __('Concepto') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-donate"></i></span>
      </div>
       {!! Form::text('conce', null, ['class' => 'form-control' . ($errors->has('conce') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Concepto')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('conce') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="comen">{{ __('Comentarios') }}*</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-comments"></i></span>
      </div>
       {!! Form::textarea('comen', null, ['class' => 'form-control' . ($errors->has('comen') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Comentarios')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('comen') }}</span>
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