{{-- @vite(['resources/css/perfil.css']) --}}
<div class="">
    @livewireStyles
    <h2 class="text-center my-4 txt_h1">¡Bienvenida a tu perfil Emma!</h2>
    <div class="div_info">
        <div class="row p-3">
            <div class="col-md-3 text-center">
                <div class="d-flex justify-content-center align-items-center pb-3">
                    <img src="./assets/images/perfil.jpg" class="img_perfil">
                </div>
                <label for="fileInput" class="enlace_imagen">
                    Cambiar imagen
                </label>
                <input id="fileInput" type="file" style="display: none;">

            </div>
            <div class="col-md-8">
                <div class="text-start my-2">
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="col-8">
                            <div class="col-md-6">
                                <div class="mb-3" wire:ignore.self>
                                    <input type="text" wire:model='nombre' class="form-control input_modal_perfil" />
                                    <x-input-error class="text_danger" for="nombre" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                        <div class="col-8">
                            <div class="d-flex row">
                                <div class="mb-3 col-md-2" wire:ignore.self>
                                    <select name="day_birth" id="day_birth"
                                        class="form-select mx-2 input_modal_perfil select_perfil" wire:model='dia_nac'>
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>

                                    <x-input-error class="text_danger" for="dia_nac" />
                                </div>
                                <div class="mb-3 col-md-3" wire:ignore.self>
                                    <select name="month_birth" id="month_birth"
                                        class="form-select mx-2 input_modal_perfil select_perfil" wire:model='mes_nac'>
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
                                    <x-input-error class="text_danger" for="mes_nac" />
                                </div>
                                <div class="mb-3 col-md-3" wire:ignore.self>
                                    <select name="year_birth" id="year_birth"
                                        class="form-select mx-2 input_modal_perfil select_perfil" wire:model='ano_nac'>
                                        @php
                                            $anioActual = date('Y');
                                            $anioInicio = '1900';
                                        @endphp
                                        @for ($i = $anioActual; $i >= $anioInicio; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <x-input-error class="text_danger" for="ano_nac" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-8">
                            <input type="text" wire:model='correo' class="form-control input_modal_perfil"
                                disabled />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col-8">
                            <input type="tel" wire:model='telefono' class="form-control input_modal_perfil"
                                maxlength="10" />
                            <x-input-error class="text_danger" for="telefono" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="col-8">
                            <input type="text" wire:model='trabajo' class="form-control input_modal_perfil" />
                            <x-input-error class="text_danger" for="trabajo" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-8">
                            <input type="text" wire:model='ciudad' class="form-control input_modal_perfil" />
                            <x-input-error class="text_danger" for="ciudad" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="col-8">
                            <a class="enlace_imagen" href="{{ route('password') }}">
                                Cambiar contraseña
                            </a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-3 div_eliminar">
                        <div class="col-1 d-flex align-items-center">
                            <i class="fas fa-trash-alt"></i>
                        </div>
                        <div class="col-8">
                            <form action="{{ route('borrar-cuenta') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn_eliminar"
                                    onclick="return confirm('¿Estás seguro de que deseas borrar tu cuenta?')">Eliminar
                                    cuenta</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-1 text-center">
                <button type="button" wire:click="actualizar()" class="btn_guardar">
                    Guardar
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5">
        <h2 class="py-3">Tu plan</h2>
        <h4 class="plan py-2">PREMIUM</h4>
        <p>Como suscriptora, disfrutas de una serie de beneficios exclusivos que estamos seguras de que has notado</p>
        <div class="row text-center py-5">
            <div class="col-md-3 py-2">
                <div>
                    <img src="./assets/images/tickets.webp" class="img_beneficios">
                </div>
                <p>Cupones de descuento en más de 1,000 marcas</p>
                <a href="#">Ver cuponera</a>
            </div>
            <div class="col-md-3 py-2">
                <img src="./assets/images/laptop.png" class="img_beneficios">
                <p>Conferencias, talleres y encuentros</p>
            </div>
            <div class="col-md-3 py-2">
                <img src="./assets/images/email.png" class="img_beneficios">
                <p>Newsletter y acceso ilimitado a nuestro portal</p>
            </div>
            <div class="col-md-3 py-2">
                <img src="./assets/images/fundacion.jpg" class="img_beneficios">
                <p>Apoyo a mujeres vulnerables y víctimas de violencia</p>
            </div>
        </div>
        <h4 class="py-3">Tu pago</h4>
        <p>Tu próxima factura será de <span class="txt_negritas">$ 599.00</span> y llegará el <span
                class="txt_negritas">06/08/23</span>.</p>
        <h4 class="py-3">Métodos de pago</h4>
        <div>
            <div class="form-check py-2">
                <input class="form-check-input" type="radio" name="metodoPago" id="mastercard">
                <img src="./assets/images/mastercard.png" class="img_metodoPago">
                <label class="form-check-label" for="mastercard">
                    Tarjeta de crédito
                </label>
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="radio" name="metodoPago" id="visa">
                <img src="./assets/images/visa.webp" class="img_metodoPago">
                <label class="form-check-label" for="visa">
                    Tarjeta de débito
                </label>
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="radio" name="metodoPago" id="paypal">
                <img src="./assets/images/paypal.png" class="img_metodoPago">
                <label class="form-check-label" for="paypal">
                    Paypal
                </label>
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="radio" name="metodoPago" id="efectivo">
                <img src="./assets/images/efectivo.png" class="img_metodoPago">
                <label class="form-check-label" for="efectivo">
                    Efectivo
                </label>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-4">
            <button class="nav-link nav_item_oscuro btn_metodoPago bnt_cancelar px-3 mx-3"
                aria-current="page">Cancelar</button>
            <button class="nav-link nav_item_oscuro btn_metodoPago px-3 mx-3" aria-current="page">Pagar</button>
        </div>

        @livewireScripts

    </div>
</div>
