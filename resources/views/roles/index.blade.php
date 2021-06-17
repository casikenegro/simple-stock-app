@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Roles y permisos</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>
                        @hasanyrole('admin|jefe operaciones')
                        <a class="pull-right btn btn-primary" role="button" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> Añadir</a>
                        @endhasanyrole
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td width="10px">
                                            @hasanyrole('admin|jefe operaciones')
                                                <a href="{{ route('roles.show', $role->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    Ver
                                                </a>
                                            @endhasanyrole
                                        </td>
                                        <td width="10px">
                                            @hasanyrole('admin|jefe operaciones')
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    Editar
                                                </a>
                                            @endhasanyrole
                                        </td>
                                        <td width="10px">
                                            @hasanyrole('admin|jefe operaciones')
                                                {!! Form::open(['route' => ['roles.destroy', $role->id],
                                                'method' => 'DELETE', 'onsubmit' => "return confirm('¿Desea eliminar el rol $role->name?');"]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm" data-hint="Eliminar Rol">
                                                    Eliminar
                                                </button>
                                                {!! Form::close() !!}
                                            @endhasanyrole
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>          
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection