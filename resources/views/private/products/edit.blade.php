<x-app-layout>
    <x-slot name="header">
        <div class="mt-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualizar</li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Actualizar Producto {{ $product->name }}
                </div>
                <div class="card-body">
                    {!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'put']) !!}

                    @include('private.products.forms.partials')

                    {!! Form::submit('Actualizar Producto', ['class' => 'btn btn-primary mt-2']) !!}


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="{{ asset('js/Product/edit.js') }}"></script>
    </x-slot>
</x-app-layout>
