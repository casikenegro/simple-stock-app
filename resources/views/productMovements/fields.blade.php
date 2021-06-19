<select class="livesearch form-control" name="product_id" id="search"></select>

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

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'code',
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