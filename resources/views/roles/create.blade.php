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
                            <strong>Creación del Rol</strong>
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm float-right">Atrás</a>
                        </div>
                        <div class="card-body">
                            <div class="col-xs-12">
                                <div class="col-xs-10 col-xs-offset-1 m-t-5">
                                    {!! Form::open(['route' => 'roles.store',  'method' => 'POST']) !!}
                                        @include('roles.components.form')
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection