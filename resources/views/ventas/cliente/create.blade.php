@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo Cliente</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
			</div>
			@endif

		</div>	
	</div>	

			<!--CategoriaController, si el metodo es POST llama a la funcion store, si el metodo es path va a llamar a la funcion update, si el metodo es  delete llama a la funcion destroy-->
			{!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off'))!!}<!-- 16-36 -->
			{{Form::token()}}
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
					</div>	
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Dirección</label>
						<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Dirección...">
					</div>	
				</div>	

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Documento</label>
						<select name="tipo_documento" class="form-control">
								<option value="DNI">DNI</option>
								<option value="RIF">RIF</option>
								<option value="PAS">PAS</option>
						</select>
					</div>		
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="num_documento">Número de Documento</label>
						<input type="text" name="num_documento" value="{{old('num_documento')}}" class="form-control" placeholder="Número de Documento...">
					</div>						
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="telefono">Teléfono</label>
						<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Teléfono...">
					</div>		
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="E-mail...">
					</div>		
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Guardar</button>
						<button class="btn btn-danger" type="reset">Cancelar</button>
					</div>
				</div>
			</div>
			
			
			{!!Form::close()!!}
	

@endsection