<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $capture->id !!}</p>
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:') !!}
    <p>{!! $capture->value !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $capture->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $capture->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $capture->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $capture->deleted_at !!}</p>
</div>

<!-- Captured At Field -->
<div class="form-group">
    {!! Form::label('captured_at', 'Captured At:') !!}
    <p>{!! $capture->captured_at !!}</p>
</div>

<!-- Device Id Field -->
<div class="form-group">
    {!! Form::label('device_id', 'Device Id:') !!}
    <p>{!! $capture->device_id !!}</p>
</div>

