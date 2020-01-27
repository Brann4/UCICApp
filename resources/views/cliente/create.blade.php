@extends('layouts.master')

@section('title','Cliente Create')

@section('content')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">             
                            <h2> Crear Cliente</h2>             
                    </div>
                </div>
            </div>
            
            <div class="card-body">

            <div class="col-auto order-md-1">
                <form class="form-group" method="POST" action="/trainer">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="">Nombre Completo:</label>
                        <input type="text" class="form-control" name="nombre" required>
                        <div class="invalid-feedback">
                        Valid full name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="+51 999 999 999" required>
                        <div class="invalid-feedback">
                        Valid phone is required.
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    
                        <div class="col-md-6 mb-3">
                        <label for="">Ciudad</label>
                        <select name="ciudad"  class="form-control" required>
                            <option value="">Seleccione</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Ancash">Ancash</option>
                            <option value="Apurímac">Apurímac</option>
                            <option value="Arequipa">Arequipa</option>
                            <option value="Ayacucho">Ayacucho</option>
                            <option value="Cajamarca">Cajamarca</option>
                            <option value="Callao">Callao</option>
                            <option value="Cuzco">Cuzco </option>
                            <option value="Huancavelica">Huancavelica</option>
                            <option value="Huánuco">Huánuco</option>
                            <option value="Ica">Ica</option>
                            <option value="Junín">Junín</option>
                            <option value="La_Libertad">La Libertad</option>
                            <option value="Lambayeque">Lambayeque</option>
                            <option value="Lima">Lima</option>
                            <option value="Loreto">Loreto</option>
                            <option value="Madre_de_Dios">Madre de Dios</option>
                            <option value="Moquegua">Moquegua</option>
                            <option value="Pasco">Pasco</option>
                            <option value="Piura">Piura</option>
                            <option value="Puno">Puno</option>
                            <option value="San_Martín">San Martín</option>
                            <option value="Tacna">Tacna</option>
                            <option value="Tumbes">Tumbes</option>
                            <option value="Ucayali">Ucayali</option>
                        </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Correo electrónico:</label>
                            <input type="email" class="form-control" name="email" placeholder="correo@example.com" required>  
                            <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                    </div>
                   
                    <div class="mb-3">
                        <label for="">Dirección:</label>
                        <textarea class="form-control" name="direccion" rows="3"></textarea>
                        <div class="invalid-feedback">
                        
                        </div>
                    </div>

                    
                    <button type="submit" href="" class="btn btn-success">Agregar</button>
                    <button type="submit" href="" class="btn btn-danger">Cancelar</button>
                    
                </form>
                </div>

            </div> 
        </div>
@endsection