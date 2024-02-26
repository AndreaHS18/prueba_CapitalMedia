@vite(['resources/css/perfil.css'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid">
                    <h2 class="text-center my-3 txt_h1">¡Bienvenida a tu perfil Emma!</h2>
                    <div class="div_info">
                        <div class="row p-3">
                            <div class="col-md-3 text-center">
                                <div class="d-flex justify-content-center align-items-center pb-3">
                                    <img src="./assets/images/perfil.jpg" class="img_perfil">
                                </div>
                                <a href="#" class="enlace_imagen">Cambiar imagen</a>
                            </div>
                            <div class="col-md-8">
                                <div class="text-start my-2">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-1">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-1">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text">{{ Auth::user()->day_birth . "/" . Auth::user()->month_birth . "/" . Auth::user()->year_birth }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-1">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-1">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text">{{ Auth::user()->phone }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-1">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text">{{ Auth::user()->job }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-1">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                        <div class="col-8">
                                            <p class="card-text">{{ Auth::user()->city }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <a href="#" class="enlace_imagen">Guardar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
