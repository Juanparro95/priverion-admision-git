<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}" class="nav-link px-2 link-secondary">Inicio</a></li>
                @can('Listar Categoría')
                    <li><a href="{{ route('categories.index') }}" class="nav-link px-2 link-dark">Categor&iacute;as</a>
                    </li>
                @endcan
                @can('Listar Producto')
                    <li><a href="{{ route('products.index') }}" class="nav-link px-2 link-dark">Productos</a></li>
                @endcan
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" title="No sirve" placeholder="Busqueda..."
                    aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ auth()->user()->photo }}" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                      this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
