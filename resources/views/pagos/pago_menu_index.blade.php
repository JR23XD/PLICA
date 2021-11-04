<div class="card text-justify">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
		<li class="nav-item">
			<a href="{{ route('pagos.index') }}" class="nav-link {{ Request::is('pagos') ? 'active' : '' }}">
				 <i class="fas fa-list nav-icon"></i> {{ __('Lista de registros') }}
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('pagos.create') }}" class="nav-link {{ Request::is('pagos/create') ? 'active' : '' }}">
				<i class="fas fa-plus-square"></i> {{ __('Registrar pago') }}
			</a>
		</li>
    </ul>
  </div>







