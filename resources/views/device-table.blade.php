<table class="table table-responsive" id="cameras-table">
    <thead>
    <th>ID</th>
    <th>Nome</th>
    <th>Tipo</th>
    <th>Valor</th>
    <th>Status</th>
    <th>Data de leitura</th>
    </thead>
    <tbody>
    @foreach($devices as $device)
        <tr>
            <td>{{$device->id}}</td>
            <td>{{$device->name}}</td>
            <td>{{$device->type}}</td>
            <td>{{$device->captures()->orderBy('captured_at', 'asc')->get()->first()['value']}}</td>
            <td>{{$device->captures()->orderBy('captured_at', 'asc')->get()->first()['status']}}</td>
            <td>{{$device->captures()->orderBy('captured_at', 'asc')->get()->first()['captured_at']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>