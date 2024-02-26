@vite(['resources/css/registro.css'])
@include('includes.header')
<x-guest-layout>
    @livewireStyles
    <div class="container-fluid mb-5">
        <div class="row div_login_completo justify-content-center">
            <div class="col-xs-12 col-sm-10 col-md-6 col-lg-6 div_login">
                <div class="d-flex justify-content-center align-items-center">
                    <x-authentication-card>
                        <x-validation-errors class="mb-4" />

                        <h1 class="text-center my-3 txt_h1">¡Beneficios de suscriptoras!</h1>
                        <h2 class="text-center my-3 txt_h2"><span class="txt_interrogacion">¿</span>Lista para unirte a
                            este espacio de mujeres<span class="txt_interrogacion">?</span>
                        </h2>

                        <form method="POST" action="{{ route('register') }}" class="formulario_registro">
                            @csrf

                            <div class="mb-3">
                                <x-label for="name" value="Nombre" class="form-label" />
                                <x-input id="name" class="block mt-1 w-full form-control" type="text"
                                    name="name" placeholder="Alejandra Montes Ulloa" required autofocus
                                    autocomplete="name" />
                            </div>

                            <div class="mb-3">
                                <x-label for="email" value="Correo electrónico" class="form-label" />
                                <x-input id="email" class="block mt-1 w-full form-control" type="email"
                                    name="email" placeholder="alejanmontull@example.com" required
                                    autocomplete="username" />
                            </div>

                            <div class="mb-3">
                                <x-label value="Cumpleaños" class="form-label" />
                                <div class="d-flex justify-content-evenly ">
                                    <select name="day_birth" id="day_birth" class="form-select mx-2" style="width: 30%">
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>

                                    <select name="month_birth" id="month_birth" class="form-select mx-2"
                                        style="width: 30%">
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>

                                    <select name="year_birth" id="year_birth" class="form-select mx-2"
                                        style="width: 30%">
                                        @php
                                            $anioActual = date('Y');
                                            $anioInicio = '1900';
                                        @endphp
                                        @for ($i = $anioActual; $i >= $anioInicio; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>

                                </div>
                            </div>

                            <div class="mb-3">
                                <x-label for="password" value="Contraseña" class="form-label" />
                                <x-input id="password" class="block mt-1 w-full form-control" type="password"
                                    placeholder="Contraseña" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mb-3">
                                <x-label for="password_confirmation" value="Confirmar contraseña" class="form-label" />
                                <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                                    placeholder="Confirmar contraseña" type="password" name="password_confirmation"
                                    required autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="nav-link active nav_item_oscuro nav_item_suscribete px-3 mx-auto" style="color: #024D4F !important">
                                    Regitsrarse
                                </x-button>
                            </div>
                        </form>
                    </x-authentication-card>
                </div>
            </div>

            <div class="row justify-content-evenly align-items-center">
                <div class="card text-center col-md-5 col-lg-4 my-2">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title txt_gratis">Gratis</h4>

                        <p class="card-text">Te ofrecemos una probadita de lo que es Emma</p>

                        <div>
                            <i class="fas fa-smile-beam carita"></i>
                            <i class="fas fa-star estrella"></i>
                        </div>

                        <h3 class="card-subtitle my-4 txt_h2">MX $0.00</h3>

                        <h4 class="card-subtitle mb-2">Incluye:</h4>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Newsletter quincenal</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Columnas invitadas</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto d-flex justify-content-center">
                            <a class="nav-link active nav_item_oscuro nav_item_suscribete px-3" aria-current="page"
                                href="#">Comienza</a>
                        </div>
                    </div>
                </div>

                <div class="card text-center col-md-5 col-lg-4 my-2 card_premium">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title txt_h1">Premium</h4>

                        <p class="card-text">Accede a todos los beneficios de Emma</p>

                        <div>
                            <i class="fas fa-kiss-beam carita"></i>
                            <i class="fas fa-heart corazon"></i>
                        </div>

                        <h3 class="card-subtitle my-4 txt_h2">MX $599.00</h3>

                        <div class="d-flex justify-content-center my-4">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckChecked"
                                    style="order: 1;">Anual</label>
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" checked style="order: 2;">
                            </div>
                        </div>

                        <h4 class="card-subtitle mb-2">Incluye:</h4>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Newsletter luneas a viernes</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Acceso ilimitado al contenido de nuestro portal</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="fas fa-ticket-alt"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Cupones de descuento en más de 1,000 marcas</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Conferencias, talleres y encuentros</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-start my-2">
                            <div class="d-flex justify-content-center">
                                <div class="col-1">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Apoya a mujeres en situación vulnerable o de violencia</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-auto d-flex justify-content-center">
                            <a class="nav-link active nav_item_oscuro nav_item_suscribete px-3" aria-current="page"
                                href="#">Comienza</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
    </div>
</x-guest-layout>
@include('includes.footer')
