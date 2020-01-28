@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre Completo:') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('Teléfono:') }}</label>

                            <div class="col-md-8">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">       
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email:') }}</label>
                            <div class="col-md-3 mb-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" placeholder="example@mail.com" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                             </div>       
                            <label for="city" class="col-md-2 col-form-label text-md-center">{{ __('Ciudad:') }}</label>
                            <div class="col-md-3 mb-2">
                                <select class="custom-select d-block w-100" name="city" id="city" required>
                                    <option value="">Seleccione..</option>
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
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Dirección:') }}</label>
                            <div class="col-md-8">
                                <textarea id="address" rows="2" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                </textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                    
                         <div class="form-group row">       
                            <label for="frontdni" class="col-md-3 col-form-label text-md-right">{{ __('DNI Frontal:') }}</label>
                            <div class="col-md-8 mb-2">
                                <input id="frontdni" type="file" class="form-control-file @error('frontdni') is-invalid @enderror" 
                                    name="frontdni" value="{{ old('frontdni') }}"  required autocomplete="frontdni">

                                @error('frontdni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="backdni" class="col-md-3 col-form-label text-md-right">{{ __('DNI Trasero:') }}</label>
                               <div class="col-md-8 mb-2">
                                <input id="backdni" type="file" class="form-control-file @error('backdni') is-invalid @enderror" 
                                    name="backdni" value="{{ old('backdni') }}" required autocomplete="backdni">

                                @error('backdni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                    
                       


                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirmar Contraseña:') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
