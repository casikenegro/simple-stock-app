<div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
            <tr>
                <th>@sortablelink('code','Codigo')</th>
                <th>@sortablelink('unit','Unidad')</th>
                <th>@sortablelink('description','Descripcion')</th>
                <th>@sortablelink('current_stock','Stock Actual')</th>
                <th>@sortablelink('min_stock','Stock Minimo')</th>
                <th>@sortablelink('max_stock','Maximo Stock')</th>
                <th>@sortablelink('point_order','Punto de re-orden')</th>
                <th>@sortablelink('value','Valor')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->code }}</td>
            <td>{{ $product->unit }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->current_stock }}</td>
            <td>{{ $product->min_stock }}</td>
            <td>{{ $product->max_stock }}</td>
            <td>{{ $product->point_order }}</td>
            <td>{{ $product->value }}</td>
            {{-- <td>{{ $product->created_at }}</td> --}}
                <td>
                 @hasanyrole('admin')
                 {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                    @endhasanyrole
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
