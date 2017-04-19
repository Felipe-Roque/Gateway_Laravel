<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Captured At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('captured_at', 'Captured At:') !!}
    {!! Form::date('captured_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_id', 'Device Id:') !!}
    {!! Form::number('device_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('captures.index') !!}" class="btn btn-default">Cancel</a>
</div>
