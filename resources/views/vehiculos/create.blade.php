@extends('layouts.app')

@section('title','Crear Vehiculo')

@section('content')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">             
                            <h2>Listado de Vehiculos</h2>             
                    </div>
                </div>
            </div>
            
            <div class="card-body">

            <div class="col-auto order-md-1">
                <form class="form-group" method="POST" action="{{ action('VehiculoController@store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                        <label for="empresa">Empresa</label>
                        <select name="empresa"  class="form-control" required>
                            <option value="">-- Seleccione una empresa --</option>
                            <option value="Empresa#1">Empresa#1</option>
                            <option value="Empresa#2">Empresa#2</option>
                            <option value="Empresa#3">Empresa#3</option>
                            <option value="Empresa#4">Empresa#4</option>
                        </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="marca">Marca:</label>
                            <select name="marca"  class="form-control" required>
                            <option value="">-- Seleccione una marca --</option>
                            <option value="Marca#1">Marca#1</option>
                            <option value="Marca#1">Marca#2</option>
                            <option value="Marca#3">Marca#3</option>
                            <option value="Marca#4">Marca#4</option>
                        </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="modelo">Modelo:</label>
                            <select name="modelo"  class="form-control" required>
                            <option value="">-- Seleccione un Modelo --</option>
                            <option value="Modelo#1">Modelo#1</option>
                            <option value="Modelo#2">Modelo#2</option>
                            <option value="Modelo#3">Modelo#3</option>
                            <option value="Modelo#4">Modelo#4</option>
                            </select>
                        </div>

                    </div>
                   
                    <div class="form-group row">
                        <div class="col-md-4 mb-2">
                            <label for="codigo_vehiculo">Codigo de Vehículo:</label>
                            <input type="text" class="form-control" name="codigo_vehiculo" 
                                placeholder="Ejemplo: AE7-203" required>
                        </div>

                        <div class="col-md-4 mb-2">
                        <label for="anio">Año:</label>
                        <select name="anio"  class="form-control" required>
                            @for($i=2020; $i>=2005;$i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="codigo_motor">Codigo de Motor:</label>
                            <input type="text" class="form-control" name="codigo_motor" 
                                placeholder="Ejemplo: US4C401022" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 mb-2">
                            <label for="numero_chasis">Numero de Chasis:</label>
                            <input type="text" class="form-control" name="numero_chasis">
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="precio">Precio:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                                <input type="text" class="form-control" name="precio" placeholder="20000.00" >
                            </div>
                            
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="fotos">Fotos:</label>
                            <input type="file" class="form-control-file" name="fotos"></input>
                        </div>
                    </div> 
                    <button type="submit" class="btn btn-success">Guardar</button>    
                </form>
                    <a href="{{ route('vehiculos.index') }}">
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </a>
                </div>

            </div> 
        </div> 
@endsection