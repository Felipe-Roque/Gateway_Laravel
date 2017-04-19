<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Extension Field -->
<div class="form-group col-sm-6">
    {!! Form::label('extension', 'Extension:') !!}
    {!! Form::text('extension', null, ['class' => 'form-control']) !!}
</div>

<!-- Full File Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_file_path', 'Full File Path:') !!}
    {!! Form::text('full_file_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Captured At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('captured_at', 'Captured At:') !!}
    {!! Form::date('captured_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Camera Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('camera_id', 'Camera Id:') !!}
    {!! Form::number('camera_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('images.index') !!}" class="btn btn-default">Cancel</a>
</div>
