<div class="table-responsive-sm">
    <table class="table table-striped" id="product_movements-table">
        <thead>
            <tr>
                <th>@lang('models/productMovements.fields.product_id')</th>
                <th>@lang('models/productMovements.fields.movement')</th>
                <th>@sortablelink('quantity','Cantidad')</th>
                <th>@sortablelink('retry_name','Nombre de Quien Retira')</th>
                <th>@sortablelink('document','Documento')</th>
                <th>@sortablelink('employee','Bodeguero')</th>
                <th>@sortablelink('ot','OT')</th>
                <th>@lang('models/productMovements.fields.is_valid')</th>
                <th>@lang('models/productMovements.fields.created_at',)</th>

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
            <td>{{ $movement->is_valid }}</td>
            <td>{{ $movement->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['movements.destroy', $movement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('movements.show', [$movement->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('movements.edit', [$movement->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>