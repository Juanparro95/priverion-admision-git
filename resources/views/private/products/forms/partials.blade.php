<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : '')]) !!}
    @error('name')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['readonly' => 'true', 'class' => 'form-control ' . ($errors->has('slug') ? 'is-invalid' : '')]) !!}
    @error('slug')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Categor&iacute;a') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('slug')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripci&oacute;n:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control block w-full mt-1 ' . ($errors->has('description') ? 'parsley-error' : '')]) !!}

    @error('description')
        <b class="text-danger tx-md-12">{{ $message }}</b>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('importance', 'Dato a tener en cuenta:') !!}
    {!! Form::textarea('importance', null, ['class' => 'form-control block w-full mt-1 ' . ($errors->has('importance') ? 'parsley-error' : '')]) !!}

    @error('importance')
        <b class="text-danger tx-md-12">{{ $message }}</b>
    @enderror
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-6 col-xxl-6 col-xl-6 col-sm-12 col-xs-12">
            {!! Form::label('retail_price', 'Precio Detal:') !!}
            {!! Form::number('retail_price', null, ['class' => 'form-control block w-full mt-1 ' . ($errors->has('retail_price') ? 'parsley-error' : '')]) !!}

            @error('retail_price')
                <b class="text-danger tx-md-12">{{ $message }}</b>
            @enderror
        </div>
        <div class="col-md-6 col-xxl-6 col-xl-6 col-sm-12 col-xs-12">
            {!! Form::label('price_wholesalers', 'Precio Mayorista:') !!}
            {!! Form::number('price_wholesalers', null, ['class' => 'form-control block w-full mt-1 ' . ($errors->has('price_wholesalers') ? 'parsley-error' : '')]) !!}

            @error('price_wholesalers')
                <b class="text-danger tx-md-12">{{ $message }}</b>
            @enderror
        </div>
    </div>
</div>
