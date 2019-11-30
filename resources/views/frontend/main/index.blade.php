@extends('frontend.layout.master')

@section('content')
    @parent


    @include('frontend.layout.header.header', ["active" => "/"])

	<div class="row">
	    <div class="col-md-12 grid-margin">
	        <div class="card">
	          <div class="card-body">
	            <h3>Caracteristicas del servidor</h3>
	            A continuación se presentan las principales caracteristicas del servidor y algunas estadisticas del rendimiento:
	            <br><br>
	            <table class="table">
	                <thead>
	                    <tr>
	                        <td> <b>Versión de sistema operativo</b>  </td>
	                        <td> {{ $so }}  </td>
	                    </tr>
	                    <tr>
	                        <td> <b>Versión dl Kernel Linux</b>  </td>
	                        <td> {{ $kernel }}  </td>
	                    </tr>
	                    <tr>
	                        <td> <b>Ip pública</b>  </td>
	                        <td> {{ $ip_public }}  </td>
	                    </tr>
	                    <tr>
	                        <td> <b>Ip privada</b>  </td>
	                        <td> {{ $ip_private }}  </td>
	                    </tr>
	                </thead>
	                
	            </table>
	          </div>
	        </div>
	    </div>
	</div>



	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				    <div class="row">
					    <div class="col-md-4">
					        <div class="d-flex align-items-center pb-2">
					          	<div class="dot-indicator bg-danger mr-2"></div>
					          	<p class="mb-0">Porcentaje de uso de CPU</p>
					        </div>
					        <h4 class="font-weight-semibold">{{ $cpu_use }} % </h4>
					        <div class="progress progress-md">
					          	<div class="progress-bar bg-danger" role="progressbar" style="width: {{ $cpu_use }}%" aria-valuenow="{{ $cpu_use }}" aria-valuemin="0" aria-valuemax="{{ $cpu_use }}"></div>
					        </div>
					    </div>
				      	<div class="col-md-4 mt-4 mt-md-0">
					        <div class="d-flex align-items-center pb-2">
					          	<div class="dot-indicator bg-success mr-2"></div>
					          	<p class="mb-0">Porcentaje de uso RAM</p>
					        </div>
					        <h4 class="font-weight-semibold">{{ $ram_use }} %</h4>
					        <div class="progress progress-md">
					          	<div class="progress-bar bg-success" role="progressbar" style="width: {{ $ram_use }}%" aria-valuenow="{{ $ram_use }}" aria-valuemin="0" aria-valuemax="{{ $ram_use }}"></div>
					        </div>
					    </div>
					    <div class="col-md-4 mt-4 mt-md-0">
					        <div class="d-flex align-items-center pb-2">
					          	<div class="dot-indicator bg-info mr-2"></div>
					          	<p class="mb-0">Espacio en Disco duro</p>
					        </div>
					        <h4 class="font-weight-semibold">{{ $disk }}</h4>
					        <div class="progress progress-md">
					          	<div class="progress-bar bg-info" role="progressbar" style="width: {{ $disk }}%" aria-valuenow="{{ $disk }}" aria-valuemin="0" aria-valuemax="{{ $disk }}"></div>
					        </div>
					    </div>
				    </div>
				 </div>
			</div>
		</div>
	</div>
@endsection
