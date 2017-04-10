<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atuador', function () {
    return '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exemplo de uso bootstrap</title>

<link rel ="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
<script type="text/javascript" src="jquery.js.js"></script>
<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<style>

.testes1{ height:160px; margin-top:1px; border:1px solid #ccc;}

</style>

</head>

<body>

<div class="row">

<div class="col-md-2 testes1" ></div>
<div class="col-md-2 testes1" ></div>


</div>

<div class="row">

<div class="col-md-2 testes1" ></div>
<div class="col-md-2 testes1" ></div>


</div>
</body>
</html>';
});

Route::get('/sensor', function () {
			    return '
			<html>
			<head>
			<meta charset="utf-8">
			<title>Exemplo de uso bootstrap</title>

			<link rel ="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css"/>
			<script type="text/javascript" src="jquery.js.js"></script>
			<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>

			<style>

			.testes1{ height:350px; margin-top:10px; border:10px solid #ccc;}

			</style>

			</head>

			<body>

			<div class="row">

			<div class="col-md-6 testes1" ></div>
			<div class="col-md-6 testes1" ></div>


			</div>

			<div class="row">

			<div class="col-md-6 testes1" ></div>
			<div class="col-md-6 testes1" ></div>



			</div>
			</body>
			</html>

';
});

Route::get('/camera', 'HomeController@novo');
