<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Rut Field -->
<div class="form-group">
    {!! Form::label('rut', __('models/funcionarios.fields.rut').':') !!}
    <p>{{ $user->rut }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', __('models/funcionarios.fields.nombre').':') !!}
    <p>{{ $user->nombre }}</p>
</div>

<!-- Nacionalidad Field -->
<div class="form-group">
    {!! Form::label('nacionalidad', __('models/funcionarios.fields.nacionalidad').':') !!}
    <p>{{ $user->nacionalidad }}</p>
</div>

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', __('models/funcionarios.fields.sexo').':') !!}
    <p>{{ $user->sexo }}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', __('models/funcionarios.fields.departamento').':') !!}
    <p>{{ $user->departamento }}</p>
</div>

<!-- Cargo Id Field -->
<div class="form-group">
    {!! Form::label('cargo_id', __('models/funcionarios.fields.cargo_id').':') !!}
    <p>{{ $user->cargo_id }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', __('models/funcionarios.fields.estado').':') !!}
    <p>{{ $user->estado }}</p>
</div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', __('models/funcionarios.fields.created_at').':') !!}
    <p>{{ $user->created_at }}</p>
</div> --}}

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{!! $user->created_at !!}</p>
</div> --}}

<!-- Updated At Field -->
{{-- <div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{!! $user->updated_at !!}</p>
</div> --}}

