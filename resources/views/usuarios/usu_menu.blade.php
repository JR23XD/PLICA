<div class="card text-justify">
	<div class="card-header">
	  <ul class="nav nav-tabs card-header-tabs">
		<li class="nav-item">
			<a href="{{ route('usuarios.index') }}" class="nav-link {{ Request::is('usuarios') ? 'active' : '' }}">
				<i class="fas fa-list nav-icon"></i> {{ __('Lista de usuarios') }}
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('usuarios.create') }}" class="nav-link {{ Request::is('usuarios/crear') ? 'active' : '' }}">
				<i class="fas fa-plus-square"></i> {{ __('Registrar usuario') }}
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('alumnos.create') }}" class="nav-link {{ Request::is('alumnos/crear') ? 'active' : '' }}">
				<i class="fas fa-plus-square"></i> {{ __('Registrar alumno') }}
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('profesores.create') }}" class="nav-link {{ Request::is('profesor/crear') ? 'active' : '' }}">
				<i class="fas fa-plus-square"></i> {{ __('Registrar Profesor') }}
			</a>
		</li>
	  </ul>
	</div>