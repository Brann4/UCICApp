@extends('layouts.master')

@section('title','Cliente Index')

@section('content')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-5">
                        <span class="float-left">
                            <h2>Lista de Clientes</h2>
                        </span>
                    </div>
                    <div class="col-7">
                        <button type="submit" href="{{ url('/trainer/create') }}" class="btn btn-success float-right">
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
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">  1</td>
                                    <td>Nombre#1</td>
                                    <td>Email#1</td>
                                    <td>Telefono#1</td>
                                    <td>Direccion#1</td>
                                    <td>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
@endsection