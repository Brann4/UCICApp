@extends('layouts.app')

@section('title','Listado de Vehiculos')

@section('content')

<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Vehículo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
                    <form class="form-group"  action="{{ action('VehiculoController@store') }}" method="POST">
                        @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-6 mt-2 ">
                            <label for="empresa">Empresa</label>
                            <select name="empresa"  class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <option value="Empresa#1">Empresa#1</option>
                                <option value="Empresa#2">Empresa#2</option>
                                <option value="Empresa#3">Empresa#3</option>
                                <option value="Empresa#4">Empresa#4</option>
                            </select>
                            </div>

                            <div class="col-md-6 mt-2 ">
                                <label for="marca">Marca:</label>
                                <select name="marca"  class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <option value="Marca#1">Marca#1</option>
                                <option value="Marca#1">Marca#2</option>
                                <option value="Marca#3">Marca#3</option>
                                <option value="Marca#4">Marca#4</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mt-2 ">
                                <label for="modelo">Modelo:</label>
                                <select name="modelo"  class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <option value="Modelo#1">Modelo#1</option>
                                <option value="Modelo#2">Modelo#2</option>
                                <option value="Modelo#3">Modelo#3</option>
                                <option value="Modelo#4">Modelo#4</option>
                                </select>
                            </div>

                            <div class="col-md-6 mt-2">
                            <label for="anio">Año:</label>
                            <select name="anio"  class="form-control" required>
                                @for($i=2020; $i>=2005;$i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        
                            <div class="col-md-6 mt-2 ">
                                <label for="codigo_motor">Código de Motor:</label>
                                <input type="text" class="form-control" name="codigo_motor" 
                                    placeholder="Ejemplo: US4C401022" required>
                            </div>

                            <div class="col-md-6 mt-2 ">
                                <label for="codigo_vehiculo">Código de Vehículo:</label>
                                <input type="text" class="form-control" name="codigo_vehiculo" 
                                    placeholder="Ejemplo: AE7-154" required>
                            </div>
                                        
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mt-2 ">
                                <label for="numero_chasis">Numero de Chasis:</label>
                                <input type="text" class="form-control" name="numero_chasis">
                            </div>

                            <div class="col-md-6 mt-2 ">
                                <label for="precio">Precio:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                        <input type="text" class="form-control" name="precio" placeholder="20000.00" >
                                    </div>
                                </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mt-2 ">
                                <label for="fotos">Fotos:</label>
                                <input type="file" class="form-control-file" name="fotos"></input>
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>  
                        <button type="submit" class="btn btn-success">Guardar</button>  
                    </div>
				</form>
			</div>
		</div>
	</div>

<div class="container">

    @if( count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    @endif

    @if(\Session::has('guardado'))
        <div class="alert alert-success">
            <h4>{{ \Session::get('guardado') }}</h4>
        </div>
    @endif

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Listado de <b>Vehículos</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success float-right" data-toggle="modal">
                        <i class="fa fa-plus-circle"></i><span>Agregar nuevo</span></a>
					
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Código Vehículo</th>
						<th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                         <td scope="row">{{ $car->id }}</td>
                        <td>{{ $car->codigo_vehiculo }}</td>
                        <td>{{  $car->marca }}</td>
                        <td>{{ $car->modelo }}</td>
                        <td>{{ $car->anio }}</td>
                        <td>{{ '$ '.$car->precio }}</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <button type="submit" class="btn btn-primary float-left" >
                                    <i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i>
                                </button>
                            </a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <button class="btn btn-danger float-left" > 
                                    <i class="fas fa-trash" data-toggle="tooltip" title="Delete"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

	
	<!-- Edit Modal HTML
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>-->
	
   
@endsection