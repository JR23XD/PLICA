<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="com">{{ __('Comprobante') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-receipt"></i></span>
      </div>
       {!! Form::text('com', null, ['class' => 'form-control' . ($errors->has('com') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Comprobante')]) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="est">{{ __('Estatus') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
      </div>
       {!! Form::text('est', null, ['class' => 'form-control' . ($errors->has('est') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Estatus')]) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="mon">{{ __('Monto') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="far fa-money-bill-alt"></i></span>
      </div>
       {!! Form::text('mon', null, ['class' => 'form-control' . ($errors->has('mon') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Monto')]) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="for">{{ __('Forma') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-cash-register"></i></span>
      </div>
       {!! Form::text('for', null, ['class' => 'form-control' . ($errors->has('for') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Forma')]) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="cf">{{ __('Código de facturación') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
      </div>
       {!! Form::text('cf', null, ['class' => 'form-control' . ($errors->has('cf') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Código de facturación')]) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="ef">{{ __('Estatus de factura') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
      </div>
       {!! Form::text('ef', null, ['class' => 'form-control' . ($errors->has('ef') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Estatus de factura')]) !!}
    </div>
  </div>
</div>

  <div class="row">
    <div class="form-group col-sm btn-sm">
        <center><a href="{{ route('facturas.index') }}" class="btn btn-default w-50 p-2 border"><i class="fas fa-sign-out-alt text-dark"></i> {{ __('Regresar') }}</a></center>
    </div>
  </div>  

  
