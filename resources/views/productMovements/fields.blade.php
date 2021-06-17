<div class="form-group col-sm-6">
    {!! Form::label('product_id', __('models/productMovements.fields.product_id').':') !!}
    <select class="form-control" name="product_id" id="product_id" >
    <?php foreach ($products as $product): ?>
        <?php if ($productMovement): ?>
            <?php if ($productMovement->product->id === $product->id): ?>
                <option selected value="{{$product->id}}">{{$product->code}} </option>
            <?php else: ?>
                <option value="{{$product->id}}">{{$product->code}} </option>
            <?php endif; ?>
        <?php else: ?>
        <option value="{{$product->id}}">{{$product->code}} </option>
        <?php endif; ?>

    <?php endforeach; ?>
    </select>
</div>


<div class="form-group col-sm-6">
    {!! Form::label('quantity', __('models/productMovements.fields.quantity').':') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('retry_name', __('models/productMovements.fields.retry_name').':') !!}
    {!! Form::text('retry_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('document', __('models/productMovements.fields.document').':') !!}
    {!! Form::text('document', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('employee', __('models/productMovements.fields.employee').':') !!}
    {!! Form::text('employee', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('ot', __('models/productMovements.fields.ot').':') !!}
    {!! Form::text('ot', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('movement', __('models/productMovements.fields.movement').':') !!}
    <select class="form-control" name="movement" id="movement" >
    <?php foreach ($typeMovements as $typeMovement): ?>
        <?php if ($productMovement): ?>
            <?php if ($productMovement->product->id === $typeMovement): ?>
                <option selected value="{{$typeMovement}}">{{$typeMovement}} </option>
            <?php else: ?>
                <option  value="{{$typeMovement}}">{{$typeMovement}} </option>
            <?php endif; ?>
        <?php else: ?>
        <option value="{{$typeMovement}}">{{$typeMovement}} </option>
        <?php endif; ?>
    <?php endforeach; ?>
    </select>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('movements.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
