<div class="form-group">
    {{ Form::label('name', 'Nombre del rol') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del rol', 'required']) }}
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
    <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
    <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
    <button id="limpiar" class="btn btn-primary" type="button">Limpiar</button>
</div>
<h3>Lista de Permisos</h3>
<div class="container-fluid pt-3">
    <h4>-Requerimientos</h4>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[0]->id, null) }}
                {{ $permissions[0]->name }}
            </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[1]->id, null) }}
                {{ $permissions[1]->name }}
            </label>
            </div>
        </div>
    </div>
    <h4>-Programaciones</h4>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[2]->id, null) }}
                {{ $permissions[2]->name }}
            </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[3]->id, null) }}
                {{ $permissions[3]->name }}
            </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[4]->id, null) }}
                {{ $permissions[4]->name }}
            </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[5]->id, null) }}
                {{ $permissions[5]->name }}
            </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
            <label>
                {{ Form::checkbox('permissions[]', $permissions[5]->id, null) }}
                {{ $permissions[42]->name }}
            </label>
            </div>
        </div>
    </div>
    <h4>-Documentos</h4>
    <h5>Ver</h5>
    <div class="row">
        @foreach($permissions as $key => $permission)
            @if ($key > 5 and $key < 24)
                <div class="col-12">
                    <div class="form-group">
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id, null) }}
                        Ver documento: {{ $documentos[$key - 6]->nombre }}
                    </label>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <h5>Llenar</h5>
    <div class="row">
        @foreach($permissions as $key => $permission)
            @if ($key > 23 and $key < 42)
                <div class="col-12">
                    <div class="form-group">
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id, null) }}
                        Llenar documento: {{ $documentos[$key - 24]->nombre }}
                    </label>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <h4>-Roles</h4>
    <div class="row">
        @foreach($permissions as $key => $permission)
            @if ($key > 44 and $key < 49)
                <div class="col-12">
                    <div class="form-group">
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id, null) }}
                        {{ $permission->name }}
                    </label>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
