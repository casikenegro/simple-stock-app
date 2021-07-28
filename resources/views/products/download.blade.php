@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/products.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @lang('models/products.plural')
                             <hr>
                             <form action="/download-products" method="GET" id="date_form">
                                {{-- @csrf --}}
                                <div class="input-group">
                                    <span class="input-group-text">Fecha inicial y Fecha Final</span>
                                    <input type="date" aria-label="init_date"  name="init_date" label="init_date" class="form-control">
                                    <input type="date" aria-label="last_date"  name="last_date" label="last_date" class="form-control">
                                    <button type="submit" id="ot" value="enviar" name="download" class="btn btn-primary">descargar</button>
                                </div>
                            </form>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
