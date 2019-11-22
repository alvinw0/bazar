@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<br>
	<h3>Listado de Areas <a href="area/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('area.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
		   <br>
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>No</th>
	    			<th>Nombre</th>
	    			<th>Descripcion</th>
	    			<th>Estado</th>
	    			<th>Opciones</th>
	    		</thead>
               @foreach ($codigos as $perico)
	    		<tr>
	    			<td>{{ $perico->id}}</td>
	    			<td>{{ $perico->nombre}}</td>
	    			<td>{{ $perico->descripcion}}</td>
	    			<td>{{ $perico->estado}}</td>
	    			<td>
	    				<a href="{{URL::action('EncargadoController@edit',$perico->id)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$perico->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
	    			</td>
	    		</tr>
	    		@include('area.modal')
	    		@endforeach
	    	</table>
	    </div>
	    {{$codigos->render()}}
	</div>
</div> 
@endsection