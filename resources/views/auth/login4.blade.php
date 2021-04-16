@extends('layouts.outside')

@section('content')

<link href="{{asset('css/login-1.css')}}" rel="stylesheet" type="text/css" />
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({{asset('img/bg-4.jpg')}});">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                
                <!--begin: Aside content-->
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white">Bienvenido a Samir</h3>
                    <p class="font-weight-lighter text-white opacity-80">Nuestro sistema interno de planificacion y recursos. Registra todos tus trabajos y planifica mejor tus recursos dentro del taller.</p>
                </div>
                <!--end: Aside content-->
                <!--begin: Aside footer for desktop-->
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold text-white">© 2021 CME-AMIR</div>
                    <div class="d-flex">
                        <a href="#" class="text-white">Manuales</a>
                        <a href="#" class="text-white ml-10">Formularios</a>
                        
                    </div>
                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
            <!--begin::Content header-->
            <div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
                <span class="font-weight-bold text-dark-50"></span>
                <a href="javascript:;" class="font-weight-bold ml-2" id="kt_login_signup">Registrese en el sistema</a>
            </div>
            <!--end::Content header-->
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{asset('img/cme.png')}}" class="max-h-100px" alt="" />
                        </a>
                    </div>
                   
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_signin_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6 @error('username') is-invalid @enderror" type="text" placeholder="{{__('username')}}" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
                            
                           
                            @error('username')
                                    <span class="fv-plugins-message-container" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6" type="password" placeholder="Password" name="password" autocomplete="off" />
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--begin::Action-->
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <a href="javascript:;" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">Olvido su contrase&ntilde;a?</a>
                            <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3"> {{ __('Login') }}</button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
                <!--begin::Signup-->
                <div class="login-form login-signup">
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{asset('img/cme.png')}}" class="max-h-100px" alt="" />
                        </a>
                    </div>
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Registrese</h3>
                        <p class="text-muted font-weight-bold">Solicite a gerencia la apertura de una cuenta</p>
                    </div>
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_signup_form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6 @error('name') is-invalid @enderror" type="text" placeholder="Nombre Completo" name="name" value="{{old('name') }}" autocomplete="name" />
                            @error('name')
                                <div class="fv-plugins-message-container">
                                    <div data-field="name" data-validator="name" class="fv-help-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6 @error('username') is-invalid @enderror" type="text" value="{{ old('username') }}" placeholder="Usuario" name="username" required autocomplete="username" />
                            @error('username')
                                <div class="fv-plugins-message-container">
                                    <div data-field="username" data-validator="username" class="fv-help-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6 @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                                <div class="fv-plugins-message-container">
                                    <div data-field="email" data-validator="emailAddress" class="fv-help-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
                            @error('password')
                                <div class="fv-plugins-message-container">
                                    <div data-field="password" data-validator="password" class="fv-help-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-4 px-6" type="password" placeholder="Confirmar password" name="password_confirmation" autocomplete="new-password" />
                        </div>
                        <div class="form-group">
                            <select name="user_type" id="" class="form-control form-control-solid h-auto py-4 px-6">
                                @foreach ($userTypes as $userType)
                                        <option value="{{$userType->id}}"> {{$userType->userType}}</option>
                                    @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label class="checkbox mb-0">
                            <input type="checkbox" name="agree" />
                            <span></span>&nbsp; Estoy deacuerdo con los
                            <a href="#">&nbsp; t&eacute;rminos y condiciones</a></label>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Registrarse en Samir</button>
                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancelar</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->
                <!--begin::Forgot-->
                <div class="login-form login-forgot">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Olvido su contrase&ntilde;a ?</h3>
                        <p class="text-muted font-weight-bold">Ingrese su correo electronico para re-iniciar su clave</p>
                    </div>
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Enviar</button>
                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancelar</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer for mobile-->
            <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Metronic</div>
                <div class="d-flex order-1 order-sm-2 my-2">
                    <a href="#" class="text-dark-75 text-hover-primary">Privacy</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
                </div>
            </div>
            <!--end::Content footer for mobile-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('js/login-general.js')}}" defer></script>
<!--end::Page Scripts-->
@endsection