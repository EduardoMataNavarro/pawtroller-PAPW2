@extends('layouts.layout')

@section('page-title', 'Perdidos')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="container">
        <!--
            <div class="row">
                <div class="w-100" style="height: 250px;" id="mapContainer">
                
                </div>
            </div>
        -->
            <h4>Amigos perdidos</h4>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-2">
                    <!-- <form action="" method="get">
                        <label for="pet-type-combo">Raza</label>
                        <select name="pet-type" id="pet-type-combo" class="form-control">
                            <option value="0"> -- Elija una raza -- </option>
                        @if($razas)
                            @foreach($razas as $raza)
                            <option value="{{ $raza->id_raza }}">{{ $raza->descripcion }}</option>
                            @endforeach
                        @endif
                        </select>
                        <label for="pet-color-combo">Color</label>
                        <select name="pet-color" id="pet-color-combo" class="form-control">
                            <option value="0"> -- Elija un color -- </option>
                        @if($colores)
                            @foreach($colores as $color)
                            <option value="{{ $color->id_color }}">{{ $color->descripcion }}</option>
                            @endforeach
                        @endif
                        </select>
                        <button class="btn btn-login" type="button">
                            Filtrar
                        </button>
                    </form> -->
                    <hr>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-10">
                    <h6>Perdidos recientemente</h6>
                    <hr>
                    <div class="row">
                        @foreach($mascotas as $perdido)
                        <div class="col-sm-6 col-md-6 col-lg-4 pet-container">
                            <div class="card">
                                <img src="{{ $perdido->path }}"  alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title"> {{ $perdido->nombreMascota }} </h4>
                                    <hr>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> {{ $perdido->lugar }}
                                        <br>
                                        {{ $perdido->info_adicional  }}
                                        <br>
                                        {{ $perdido->created_at }}
                                    </p>
                                </div>
                                <a href="/pet/{{ $perdido->id_mascota }}" class="btn btn-login">Detalles</a>
                            </div>
                        </div>
                        @endforeach
                        <!-- 
                        <div class="col-sm-6 col-md-6 col-lg-4 pet-container">
                            <div class="card">
                                <img src="{{asset('img/pet-img/dog1.jpg')}}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">Marrano</h4>
                                    <hr>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> San Nicolas, Nuevo León, MX
                                        <br>
                                        Responde al nombre de Marrano
                                        <br>
                                        Visto por última vez cerca de Hda. Los Morales.
                                    </p>
                                </div>
                                <a href="/pet" class="btn btn-login">Detalles</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 pet-container">
                            <div class="card">
                                <img src="{{asset('img/pet-img/dog2.jpg')}}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">Borrego</h4>
                                    <hr>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> Santa Catarina, Nuevo León, MX
                                        <br>
                                        Está muy gordo para correr
                                        <br>
                                        Visto por última vez cerca de Valle Poniente.
                                    </p>
                                </div>
                                <a href="/pet" class="btn btn-login">Detalles</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection