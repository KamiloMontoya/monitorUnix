@extends('frontend.layout.master')

@section('content')
    @parent
    
    @include('frontend.layout.header.header', ["active" => "/configure"])

    <div class="row">
	    <div class="col-md-12 grid-margin ">
	        <div class="card stretch-card">
	          	<div class="card-body">
	          		<h3>Listado de comandos para extraer información del servidor</h3>
		            <hr>
		            @include('frontend.main.partials.commands')
		            
	          </div>
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-12 grid-margin ">
	        <div class="card stretch-card">
	          	<div class="card-body">
		            <h3> Instalación Nginx </h3>
		            <hr>
		            @include('frontend.main.partials.server_install')
		            
	          </div>
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-12 grid-margin ">
	        <div class="card stretch-card">
	          	<div class="card-body">
		            <h3> Instalación de Git y configuración de acceso por SSH </h3>
		            <hr>
		            @include('frontend.main.partials.git')
		            
	          </div>
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-12 grid-margin ">
	        <div class="card stretch-card">
	          	<div class="card-body">
		            <h3> Problemas encontrados </h3>
		            <hr>
		            @include('frontend.main.partials.problems')
		            
	          </div>
	        </div>
	    </div>
	</div>

	

@endsection
