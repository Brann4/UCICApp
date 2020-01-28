@extends('layouts.app')

@section('title','Listado de Vehiculos')

@section('content')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-5">
                        <span class="float-left">
                            <h2>Documentos</h2>
                        </span>
                    </div>
                    <div class="col-7">
                        <button type="submit"  class="btn btn-success float-right">
                            <i class="fa fa-plus-circle"></i> Agregar
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="card-body">
                <div class="form-group">
                    <div class="table-responsive-lg">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Codigo Vehículo</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Año</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
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
                                    <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
@endsection