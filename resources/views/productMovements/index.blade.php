@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/productMovements.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @lang('models/productMovements.plural')
                                <a class="pull-right btn btn-primary" role="button" href="{{ route('movements.create') }}"><i class="fa fa-plus"></i> Añadir</a>
                             <hr>
                             <form action="/movements" method="GET" id="date_form">
                                {{-- @csrf --}}
                                <div class="input-group">
                                    <span class="input-group-text">Fecha inicial y Fecha Final</span>
                                    <input type="date" aria-label="init_date"  name="init_date" label="init_date" class="form-control">
                                    <input type="date" aria-label="last_date"  name="last_date" label="last_date" class="form-control">
                                    <button type="submit" id="ot" value="enviar" class="btn btn-primary">buscar</button>

                                </div>
                            </form>
                            <form action="/movements" method="GET" name="form" id="form" >
                                {{-- @csrf --}}
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="buscar"  name="search" aria-label="search" aria-describedby="button-addon2">
                                    <select class="form-control" name="typeSearch" id="typeSearch" >
                                        <?php foreach ($searchs as $data): ?>
                                            <option value="{{$data}}">{{$data}} </option>
                                        <?php endforeach; ?>
                                        </select>
                                        <select class="form-control" name="orderBy" id="orderBy" >
                                        <?php foreach ($orderBy as $data): ?>
                                            <option value="{{$data}}">{{$data}} </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button  type="submit" id="ot" value="enviar" class="btn btn-primary"  >buscar</button>
                                </div>
                            </form>
                         <div class="card-body">
                             @include('productMovements.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
