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
                                <div class="input-group mb-3 d-flex">
                                    <select class="livesearch form-control"  style="width: 95%;" name="search" id="search"></select>
                                <button  type="submit" id="ot" value="enviar" class="btn btn-primary"  >buscar</button>
                                </div>
                            </form>
                         <div class="card-body">
                             @include('productMovements.table')
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
    @push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'code - descripcion',
        ajax: {
            url: '/search',
            dataType: 'json',
            delay: 250,
            tags: true,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: `${item.code} - ${item.description}`,
                            id: item.id,
                            ...item,
                        }
                    })
                };
            },
            cache: true
        }
    })
    </script>

</script>
@endpush
@endsection
