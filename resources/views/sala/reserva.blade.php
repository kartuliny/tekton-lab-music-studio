@extends('principal.master')
	@section('menu')
				<li class="active"><a href="#">Inicio</a></li>
	            <li ><a href="#" onclick="window.location.href='/sala/cliente'">Clientes</a></li>
	            <li><a href="#" onclick="window.location.href='/sala/instru'">Instrumentos</a></li>
	            <li><a href="#" onclick="window.location.href='/sala/room'">Rooms</a></li>
	            
	@endsection
		@section('css')
			<link rel="stylesheet" href=" {{asset('css/alertify.css')}}">
			<link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">

		@endsection
		@section('js')

			<script src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>
			<script src="{{asset('js/reserva.js')}}"></script>
			<script src="{{asset('js/alertify.js')}}"></script>
			<script src="{{asset('js/sweetalert2.js')}}"></script>
			
			
			
		@endsection

		@section('modal')
			@include('principal.plantilla.modal')
		@endsection


@section('content')

<br><br><br><br>


	
<div class="content"> 
	<div class="box ">
		<div class="col-md-1"></div>
		<div class="col-md-10 text-center">
			<form autocomplete="off">
			<!--<div class="form-group">
				{!! Form::label('name','Nombre :')!!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required autofocus'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Correo :')!!}
				{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa Correo'])!!}
			</div>
			
			<div class="form-group">
				<div class="col-md-6">
				{!! Form::label('type','Buscar :')!!}
				{!! Form::select('type',[''=>'Ingresar Nivel ..','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control'])!!}
				</div>-->
				<div class="form-group col-md-5">
			
				{!! Form::text('name',null,['class'=>'form-control datepicker','placeholder'=>'Buscar Fecha','id'=>'datepicker'])!!}
				</div>
				<div class="form-group col-md-3">
			
				{!! Form::select('hora',[''=>'Horas ..',1=>'1 Hora',2=>'2 Horas',3=>'3 Horas',4=>'4 Horas',5=>'5 Horas'],null,['class'=>'form-control','id'=>'hora'])!!}
				</div>
				

				<div class="form-group col-md-3">
					<a  class="btn btn-info btn_Buscar">Buscar</a>
				</div>
				<hr>
				
				 
					<br><br><br><br>
				<div class="form-group col-md-12 text-center message">
					Esperando busqueda ....
				</div>
				<br><br><br>
				<div id="new" class="list-group col-md-6">
						
						<!--ACA APARECERA LOS RESULTADOS-->
				</div>

				<div style="display:none" id="intrumentos" class="list-group col-md-6">
					<div class="row">

						<div class="col-md-1"></div>
						<div class="col-md-10" id="content_instru">
							<!--NOMBRE DE LA SALA-->
							<div><h4 id="name_sala"></h4></div>
							<!--<div class="form-group col-md-6 btn_check" value="">
							<div class="checkbox">
								  <label><input type="checkbox" value="">Option 1</label>
							
							</div>
							</div>
							<div class="form-group col-md-6">
							
							<input type="text" value="" placeholder="Cantidad" id="cantidad" class="form-control">
							</div>-->
							
						</div>
					</div>
				</div>			
			</form>
			<br>
			<div style="display:none" class="text-center" id="show_email">
				<input id="s_email" type="email" value="" class="form-control" placeholder="Ingrese Correo">
			</div>
			<br><br>
			<div style="display:none" class="text-center" id="show_sabe">
				<button type="button" class="btn btn-success btn-lg btn_sabe"> Guardar !</button>
			</div>
	</div>
					<input id="id_room" style="display:none" value="">
					<input id="fecha_fin" style="display:none" value="">
					<input id="count" style="display:none" value="">
					<button type="button" class=" btn_total_save">laravel</button>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection