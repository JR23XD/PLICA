<div class="card text-justify">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
		<li class="nav-item">
			<a href="{{ route('facturas.index') }}" class="nav-link {{ Request::is('facturas') ? 'active' : '' }}">
				 <i class="fas fa-list nav-icon"></i> {{ __('Lista de facturas') }}
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('facturas.create') }}" class="nav-link {{ Request::is('facturas/create') ? 'active' : '' }}">
				<i class="fas fa-plus-square"></i> {{ __('Registrar factura') }}
			</a>
		</li>
    </ul>
  </div>







