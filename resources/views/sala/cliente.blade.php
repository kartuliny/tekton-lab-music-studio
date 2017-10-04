@extends('principal.master')
	@section('menu')
				<li ><a href="#" onclick="window.location.href='/sala/reserva'">Inicio</a></li>
	            <li class="active"><a href="#">Clientes</a></li>
	            <li><a href="#" onclick="window.location.href='/sala/instru'">Instrumentos</a></li>
	            <li><a href="#" onclick="window.location.href='/sala/room'">Rooms</a></li>
	            
	@endsection
		@section('css')
			<link rel="stylesheet" href=" {{asset('css/alertify.css')}}">
		@endsection
		@section('js')
			<script src="{{asset('js/clientes.js')}}"></script>
			<script src="{{asset('js/alertify.js')}}"></script>
		@endsection

		@section('modal')
			@include('principal.plantilla.modal')
		@endsection


@section('content')

<br><br><br><br>


	
<div class="content"> 
	<div class="box ">
		<div class="col-md-1"></div>
		<div class="col-md-10 ">
			<!--{!! Form::open(['method'=>'POST']) !!}

			<div class="form-group">
				{!! Form::label('name','Nombre :')!!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required autofocus'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Correo :')!!}
				{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa Correo'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('password','Contaseña :')!!}
				{!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa Contraseña'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('type','Tipo :')!!}
				{!! Form::select('type',[''=>'Ingresar Nivel ..','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control'])!!}
			</div>
			<div  class="form-group">
				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
			</div>



			{!! Form::close() !!}
		-->
	 		<a id="btn_add" name="btn_add" class="btn btn-default pull-right">Agregar Usuario</a>

			<table class="table table-hover">
				<thead class="info">
					<th>ID</th> 
					<th>Nombre</th>
					<th>Correo</th>
					<th>Accion</th>
				</thead>
				<tbody id="cliente-list" name="cliente-list">
					@foreach($clientes as $cliente)
					<tr id="cliente{{$cliente->id}}">
						<td>{{$cliente->id}}</td>
						<td>{{$cliente->name}}</td>
						<td>{{$cliente->email}}</td>
						<td>
							<button class="btn btn-success icon-eye viewCliente" value="{{$cliente->id}}"></button> 
							<button class="btn btn-warning icon-edit editCliente" value="{{$cliente->id}}"></button> 
							<button id="btn_Delete" value="{{$cliente->id}}" class="btn btn-danger icon-trash btn_Delete"></button>
						</td>
					</tr> 
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection