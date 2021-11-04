<div class="row">
    <div class="form-group col-sm btn-sm">
        <label for="com">{{ __('Comprobante') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-receipt"></i></span>
            </div>
            {!! Form::text('com', $pagos->com, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Comprobante'), 'readonly' => 'readonly']) !!}
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
            {!! Form::text('est', $pagos->est, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Estamon'), 'readonly' => 'readonly']) !!}
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
            {!! Form::text('mon', $pagos->mon, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Mofor'), 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-sm btn-sm">
        <label for="for">{{ __('Forma') }}*</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-cash-register"></i></span>
            </div>
            {!! Form::text('for', $pagos->for, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Focf'), 'readonly' => 'readonly']) !!}
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
            {!! Form::text('cf', $pagos->cf, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Código de facturacef'), 'readonly' => 'readonly']) !!}
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
            {!! Form::text('ef', $pagos->ef, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Estatus de factura'), 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-sm btn-sm">
        <center><a href="{{ route('pagos.index') }}" class="btn btn-default w-50 p-2 border"><i
                    class="fas fa-sign-out-alt text-dark"></i> {{ __('Regresar') }}</a></center>
    </div>
</div>
</div>
