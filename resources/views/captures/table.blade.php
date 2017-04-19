<table class="table table-responsive" id="captures-table">
    <thead>
        <th>Value</th>
        <th>Status</th>
        <th>Captured At</th>
        <th>Device Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($captures as $capture)
        <tr>
            <td>{!! $capture->value !!}</td>
            <td>{!! $capture->status !!}</td>
            <td>{!! $capture->captured_at !!}</td>
            <td>{!! $capture->device_id !!}</td>
            <td>
                {!! Form::open(['route' => ['captures.destroy', $capture->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('captures.show', [$capture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('captures.edit', [$capture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>