<div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Unidad</th>
                <th>Descripcion</th>
                <th>Stock Actual</th>
                <th>Stock Minimo</th>
                <th>Maximo Stock</th>
                <th>Punto de re-orden</th>
                <th>Valor</th>
                <th>Creado</th>
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
                <td>{{ $product->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>