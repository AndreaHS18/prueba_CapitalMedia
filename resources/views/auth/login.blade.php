@vite(['resources/css/login.css'])
<x-guest-layout>
    <div class="container-fluid">
        <div class="row div_login_completo">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 d-none d-md-flex justify-content-center align-items-center">
                <img src="{{ asset('/assets/images/emma_logo.webp') }}" class="img-fluid logo_login">
            </div>


            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 div_login">
                <div class="div_form_login">
                    <div class="d-flex justify-content-center align-items-center text-center">
                        <div class="contenedor_form p-5">
                            <div class="d-flex d-md-none justify-content-center align-items-center pb-5">
                                <img src="{{ asset('/assets/images/emma_logo.webp') }}" class="img-fluid">
                            </div>

                            <h4>¡Únete a EMMA!</h4>

                            <h5>¡Y sé parte de nuestra comunidad!</h5>

                            <div>
                                <i class="fas fa-heart corazon"></i>
                                <i class="fas fa-star estrella"></i>
                            </div>

                            <x-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-input id="email" class="block mt-1 w-full form-control" type="email"
                                        name="email" placeholder="Correo electrónico" required autofocus
                                        autocomplete="username" />
                                </div>

                                <div class="mt-4">
                                    <x-input id="password" class="block mt-1 w-full form-control" type="password"
                                        name="password" placeholder="Contraseña" required
                                        autocomplete="current-password" />
                                </div>

                                <div class="text-center">
                                    <x-button class="mt-4 btn_iniciarsesion w-100">
                                        <span class="txt_iniciarsesion">Iniciar sesión</span>
                                    </x-button>
                                </div>


                            </form>

                            <div class="d-flex">
                                <hr class="linea_divisora">
                                <h3 class="mx-3">o</h3>
                                <hr class="linea_divisora">
                            </div>

                            <div class="text-center my-4">
                                <a href="#" class="link_negro d-flex align-items-center justify-content-center">
                                    <i class="fab fa-google logo_google mx-2"></i>
                                    <p class="card-text m-0">Continuar con Google</p>
                                </a>
                            </div>

                            <div>
                                <a class="text-sm link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center text-center mt-4">
                        <div class="contenedor_form p-3">
                            <p class="txt_registro">¿No tienes cuenta?
                                <span>
                                    <a href="{{ route('register') }}" class="ml-4 link_registro">Regístrate</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
