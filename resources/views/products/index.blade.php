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
                 <form action="/products" method="GET" name="form" id="form" >
                                {{-- @csrf --}}
                                <div class="input-group mb-3">
                                    <select class="livesearch form-control"  style="width: 95%;" name="search" id="search"></select>
                                    <button  type="submit" id="ot" value="enviar" class="btn btn-primary"  >buscar</button>
                                </div>
                            </form>
                     <div class="card">
                        @hasanyrole('admin')
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @lang('models/products.plural')
                             <a class="pull-right btn btn-primary" role="button" href="{{ route('products.create') }}"><i class="fa fa-plus"></i> Añadir</a>
                         </div>
                         @endhasanyrole
                         <div class="card-body">
                             @include('products.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
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
        tags: true,
        ajax: {
            url: '/search',
            dataType: 'json',
            delay: 250,
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

