@extends('frontend.layout.master')

@section('content')
    @parent
    
    @include('frontend.layout.header.header', ["active" => "/configure"])

	<div class="row">
	    <div class="col-md-12 grid-margin ">
	        <div class="card stretch-card">
	          	<div class="card-body">
		            <h3>Documentos</h3>
		            <hr>

		            @include('frontend.main.partials.server_install')
		            @include('frontend.main.partials.commands')
		            
	          </div>
	        </div>
	    </div>
	</div>
@endsection
