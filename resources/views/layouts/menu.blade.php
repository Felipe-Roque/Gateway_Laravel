<li class="{{ Request::is('cameras*') ? 'active' : '' }}">
    <a href="{!! route('cameras.index') !!}"><i class="fa fa-edit"></i><span>Cameras</span></a>
</li>

<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Imagens</span></a>
</li>

<li class="{{ Request::is('devices*') ? 'active' : '' }}">
    <a href="{!! route('devices.index') !!}"><i class="fa fa-edit"></i><span>Dispositivos</span></a>
</li>

<li class="{{ Request::is('captures*') ? 'active' : '' }}">
    <a href="{!! route('captures.index') !!}"><i class="fa fa-edit"></i><span>Capturas</span></a>
</li>

