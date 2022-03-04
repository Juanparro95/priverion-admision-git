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
