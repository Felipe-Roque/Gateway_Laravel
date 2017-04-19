<table class="table table-responsive" id="images-table">
    <thead>
        <th>Name</th>
        <th>Path</th>
        <th>Extension</th>
        <th>Full File Path</th>
        <th>Captured At</th>
        <th>Camera Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($images as $image)
        <tr>
            <td>{!! $image->name !!}</td>
            <td>{!! $image->path !!}</td>
            <td>{!! $image->extension !!}</td>
            <td>{!! $image->full_file_path !!}</td>
            <td>{!! $image->captured_at !!}</td>
            <td>{!! $image->camera_id !!}</td>
            <td>
                {!! Form::open(['route' => ['images.destroy', $image->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('images.show', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('images.edit', [$image->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>