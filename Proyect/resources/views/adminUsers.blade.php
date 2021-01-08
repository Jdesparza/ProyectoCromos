@extends('layouts.appAdmin')

@section('content')
<section class="contenidoAdmin">
    @if ($errors->any())
        <ul class="alertaUl">
            <section class="alerta">
                @foreach($errors->all() as $error)
                    <li class="alertaLi">{{ $error }}</li>
                @endforeach
            </section>
        </ul>
    @endif

    <p class="formularioTitulo">Registrar Usuario</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminUsers.store') }}">
                @csrf
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInput" name="name" value="{{ old('name') }}" required autocomplete="name">
                    <label for="name" class="formularioLabel">{{ __('Name') }}</label>
                </div>

                <div class="">
                    <input id="email" type="email" class="formularioInput" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email" class="formularioLabel">{{ __('E-Mail Address') }}</label>
                </div>

                <div class="">
                    <input id="password" type="password" class="formularioInput" name="password" required autocomplete="new-password">
                    <label for="password" class="formularioLabel">{{ __('Password') }}</label>
                </div>

                <div class="">
                    <input id="password-confirm" type="password" class="formularioInput" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm" class="formularioLabel">{{ __('Confirm Password') }}</label>
                </div>

                <div class="">
                    <input id="rol" type="text" class="formularioInput" name="rol" value="{{ old('rol') }}" required autocomplete="rol">
                    <label for="rol" class="formularioLabel">{{ __('Rol') }}</label>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Datos de Usuario</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>Nombre</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Rol') }}</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <tr>
                    <td>{{ Auth::user()->name }}</td><td>{{ Auth::user()->email }}</td>
                    <td>{{ Auth::user()->rol }}</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection