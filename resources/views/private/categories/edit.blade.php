<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-color-present rounded shadow-sm">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">EDITAR CATEGOR&Iacute;AS</h1>
            </div>
        </div>
        <div class="mt-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorías</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualizar Categoría</li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Actualizar Categor&iacute;a {{ $category->name }}
                </div>
                <div class="card-body">
                    {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'put']) !!}

                    @include('private.categories.forms.partials')

                    {!! Form::submit('Actualizar Categor&iacute;a', ['class' => 'btn btn-primary mt-2']) !!}


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="{{ asset('js/Category/edit.js') }}"></script>
    </x-slot>
</x-app-layout>
