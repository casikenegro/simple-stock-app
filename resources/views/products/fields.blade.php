<div class="form-group col-sm-6">
    {!! Form::label('code', __('models/products.fields.code').':') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('unit', __('models/products.fields.unit').':') !!}
    {!! Form::text('unit', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/products.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('min_stock', __('models/products.fields.min_stock').':') !!}
    {!! Form::number('min_stock', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('max_stock', __('models/products.fields.max_stock').':') !!}
    {!! Form::number('max_stock', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('current_stock', __('models/products.fields.current_stock').':') !!}
    {!! Form::number('current_stock', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('point_order', __('models/products.fields.point_order').':') !!}
    {!! Form::number('point_order', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('value', __('models/products.fields.value').':') !!}
    {!! Form::number('value', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
