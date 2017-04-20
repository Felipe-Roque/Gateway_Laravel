<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gateway</title>

<!--<link rel ="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>-->

  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/custom.css" rel="stylesheet">

<style>

.camera1{ height:280px; width: 360px; margin-top:2px; margin-left: -5px; border:5px solid #c0c0c0;}
.camera2{ height:280px; width: 360px; margin-top:2px; margin-left: -5px; border:5px solid #c0c0c0;}
.camera3{ height:280px; width: 360px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}
.camera4{ height:280px; width: 360px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}

.atuador1{ height:280px; width: 300px; margin-top:2px; margin-left: -5px; border:5px solid #c0c0c0;}
.atuador2{ height:280px; width: 300px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}

.ultrassom1{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}
.ultrassom2{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}
.ultrassom3{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}
.ultrassom4{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}

.fumaca1{ height:80px; width: 120px; margin-top:-5px; margin-left: 80px; border:5px solid #c0c0c0;}
.fumaca2{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}
.fumaca3{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}
.fumaca4{ height:80px; width: 120px; margin-top:-5px; margin-left: -5px; border:5px solid #c0c0c0;}

.painel5{ height:630px; width: 270px; margin-top: 2px; margin-left: 2px; border:5px solid #c0c0c0;}

</style>

</head>

<body>

<div class="col-md-2 painel5" >
	<p>
  		<img src="http://identidade.ufsc.br/files/2010/09/brasao_UFSC_vertical_sigla1.jpg"
  		align="left" width="52" height="72"> <b><p align="center"><font color="Navy" size="4">Universidade Federal de Santa Catarina </b></font></p>  
  	</p><br>
  	<b>Disciplina:</b> Projeto de Sistemas Embarcados <br><br>
  	<b>Professor:</b> Marcelo Daniel Berejuck <br><br>
  	<b>Componentes:</b> Alan Kunz Cechinel, Felipe Vieira Roque, Luiz Antonio Kuhnen Ronsani, Thiago Raulino Dal Pont

</div>

<div class="row">

<div class="col-md-2 camera1" >
  	<div class="btn-group btn-group-xs" role="group" aria-label="...">
  	<button type="button" class="btn btn-default">
  		<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Camera 1
  	</button>
  	</div>

  	<img src=""
  	align="left" width="320" height="240">
  	
</div>

<div class="col-md-2 camera2" >
  	<div class="btn-group btn-group-xs" role="group" aria-label="...">
  	<button type="button" class="btn btn-default">
  		<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Camera 2
  	</button>
  	</div>

  	<img src=""
  	align="left" width="320" height="240">

</div>

<div class="col-md-2 atuador1" >
  	<div class="btn-group btn-group-xs" role="group" aria-label="...">
  	<button type="button" class="btn btn-default">
  		<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Atuador 1
  	</button>
  	</div>
</div>

<div class="col-md-2 camera3" >
  	<div class="btn-group btn-group-xs" role="group" aria-label="...">
  	<button type="button" class="btn btn-default">
  		<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Camera 3
  	</button>
  	</div>

  	<img src=""
  	align="left" width="320" height="240">

</div>

<div class="col-md-2 camera4" >
  	<div class="btn-group btn-group-xs" role="group" aria-label="...">
  	<button type="button" class="btn btn-default">
  		<span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Camera 4
  	</button>
  	</div>

  	<img src=""
  	align="left" width="320" height="240">

</div>

<div class="col-md-2 atuador2" >
  	<div class="btn-group btn-group-xs" role="group" aria-label="...">
  	<button type="button" class="btn btn-default">
  		<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Atuador 2
  	</button>
  	</div>
</div>

<div class="col-md-2 ultrassom1" >
  	<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> Sensor Ultrassom 1
</div>

<div class="col-md-2 ultrassom2" >
  	<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> Sensor Ultrassom 2
</div>

<div class="col-md-2 ultrassom3" >
  	<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> Sensor Ultrassom 3
</div>

<div class="col-md-2 ultrassom4" >
  	<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> Sensor Ultrassom 4
</div>

<div class="col-md-2 fumaca1" >
	<span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sensor Fumaça 1
</div>

<div class="col-md-2 fumaca2" >
	<span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sensor Fumaça 2
</div>

<div class="col-md-2 fumaca3" >
	<span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sensor Fumaça 3
</div>



<div class="col-md-2 fumaca4" >
	<span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sensor Fumaça 4
</div>
</div>


</body>
</html>