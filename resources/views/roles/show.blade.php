@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('roles.index') }}">Roles y permisos</a>
        </li>
        <li class="breadcrumb-item active">@lang('crud.detail')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Gestión del Rol:</strong> {{ $role->name }}
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm float-right">Atrás</a>
                        </div>
                        <div class="card-body">
                            <div class="col-xs-12 p-r-0 p-t-10">
                                <div class="col-xs-12 p-0 bg-white radius-5">
                                    <div class="col-md-8 col-md-offset-2 col-xs-12">                            
                                        <p><b>Nombre:</b> {{ $role->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection