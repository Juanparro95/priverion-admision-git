<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
                class="d-inline-block align-text-top">
            Prueba
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @can('Listar Categoría')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('categories.index') }}">Categor&iacute;as</a>
                    </li>
                @endcan
                @can('Listar Producto')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                    </li>
                @endcan
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="d-flex justify-content-start">
                        <a class="nav-link">
                            <img style="width: 10%" src="{{ auth()->user()->photo }}"
                                class="bd-placeholder-img rounded-circle mr-3" alt="">
                            {{ auth()->user()->name }}
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="route('logout')" onclick="event.preventDefault();
                                  this.closest('form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
