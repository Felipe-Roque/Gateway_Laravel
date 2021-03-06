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

<h2><i>Status</i></h2>

<!-- Rounded switch -->
<label class="switch">
  <input type="checkbox">
  <div class="slider round"></div>
</label>

<h3-1><i>OFF</i></h3-1>
<h3-2><i>ON</i></h3-2>

<style>
.switch {
  position: absolute;
  display: inline-block;
  left: 80px;
  top: 600px;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

h2 {
    position:absolute;
    top: 540px;
    left: 73px;
    color: #FFF;
}

h3-1 {
    position:absolute;
    top: 608px;
    left: 50px;
    color: #FFF;
    font
}

h3-2 {
    position:absolute;
    top: 608px;
    left: 145px;
    color: #FFF;
    font
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>