<div class="table-responsive-sm">
    <table class="table table-striped" id="product_movements-table">
        <thead>
            <tr>
                <th>@lang('models/productMovements.fields.product_id')</th>
                <th>@lang('models/productMovements.fields.movement')</th>
                <th>@lang('models/productMovements.fields.quantity')</th>
                <th>@lang('models/productMovements.fields.retry_name')</th>
                <th>@lang('models/productMovements.fields.document')</th>
                <th>@lang('models/productMovements.fields.employee')</th>
                <th>@lang('models/productMovements.fields.ot')</th>
                <th>@lang('models/productMovements.fields.created_at')</th>

            </tr>
        </thead>
        <tbody>
        @foreach($productMovements as $movement)
            <tr>
                <td>{{ $movement->product->code }}</td>
            <td>{{ $movement->movement }}</td>
            <td>{{ $movement->quantity }}</td>
            <td>{{ $movement->retry_name }}</td>
            <td>{{ $movement->document }}</td>
            <td>{{ $movement->employee }}</td>
            <td>{{ $movement->ot }}</td>
            <td>{{ $movement->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>