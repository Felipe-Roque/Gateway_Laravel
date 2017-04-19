<table class="table table-responsive" id="cameras-table">
    <thead>
        <th>Name</th>
        <th>Model</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cameras as $camera)
        <tr>
            <td>{!! $camera->name !!}</td>
            <td>{!! $camera->model !!}</td>
            <td>
                {!! Form::open(['route' => ['cameras.destroy', $camera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cameras.show', [$camera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cameras.edit', [$camera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>