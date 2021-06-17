<div class="form-group">
    {!! Form::label('product_id', __('models/productMovements.fields.product_id').':') !!}
    <p>{{ $productMovement->product->code }}</p>
</div>

<div class="form-group">
    {!! Form::label('movement', __('models/productMovements.fields.movement').':') !!}
    <p>{{ $productMovement->movement }}</p>
</div>

<div class="form-group">
    {!! Form::label('quantity', __('models/productMovements.fields.quantity').':') !!}
    <p>{{ $productMovement->quantity }}</p>
</div>

<div class="form-group">
    {!! Form::label('retry_name', __('models/productMovements.fields.retry_name').':') !!}
    <p>{{ $productMovement->retry_name }}</p>
</div>
<div class="form-group">
    {!! Form::label('document', __('models/productMovements.fields.document').':') !!}
    <p>{{ $productMovement->document }}</p>
</div>
<div class="form-group">
    {!! Form::label('ot', __('models/productMovements.fields.ot').':') !!}
    <p>{{ $productMovement->ot }}</p>
</div>
<div class="form-group">
    {!! Form::label('employee', __('models/productMovements.fields.employee').':') !!}
    <p>{{ $productMovement->employee }}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', __('models/productMovements.fields.created_at').':') !!}
    <p>{{ $productMovement->created_at }}</p>
</div>
