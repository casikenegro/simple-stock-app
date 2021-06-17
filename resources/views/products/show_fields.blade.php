<div class="form-group">
    {!! Form::label('code', __('models/products.fields.code').':') !!}
    <p>{{ $product->code }}</p>
</div>

<div class="form-group">
    {!! Form::label('unit', __('models/products.fields.unit').':') !!}
    <p>{{ $product->unit }}</p>
</div>

<div class="form-group">
    {!! Form::label('description', __('models/products.fields.description').':') !!}
    <p>{{ $product->description }}</p>
</div>

<div class="form-group">
    {!! Form::label('current_stock', __('models/products.fields.current_stock').':') !!}
    <p>{{ $product->current_stock }}</p>
</div>

<div class="form-group">
    {!! Form::label('min_stock', __('models/products.fields.min_stock').':') !!}
    <p>{{ $product->min_stock }}</p>
</div>

<!-- Origen Field -->
<div class="form-group">
    {!! Form::label('max_stock', __('models/products.fields.max_stock').':') !!}
    <p>{{ $product->max_stock }}</p>
</div>

<!-- Destino Field -->
<div class="form-group">
    {!! Form::label('point_order', __('models/products.fields.point_order').':') !!}
    <p>{{ $product->point_order }}</p>
</div>

<!-- Camion Field -->
<div class="form-group">
    {!! Form::label('value', __('models/products.fields.value').':') !!}
    <p>{{ $product->value }}</p>
</div>
