<div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
            <tr>
                <th>@lang('models/products.fields.code')</th>
                <th>@lang('models/products.fields.unit')</th>
                <th>@lang('models/products.fields.description')</th>
                <th>@lang('models/products.fields.current_stock')</th>
                <th>@lang('models/products.fields.min_stock')</th>
                <th>@lang('models/products.fields.max_stock')</th>
                <th>@lang('models/products.fields.point_order')</th>
                <th>@lang('models/products.fields.value')</th>
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
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>