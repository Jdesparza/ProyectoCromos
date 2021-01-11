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
    @if ($message = Session::get('mensaje'))
        <ul class="alertaUl">
            <section class="alerta">
            <p>{{ $message }}</p>
            </section>
        </ul>
    @endif
    <p class="formularioTituloEdit">Editar Usuario {{ $adminUser->name }}</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminUsers.update', $adminUser->id) }}">
                @csrf
                @method('PUT')
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInputDos" name="name" value="{{ $adminUser->name }}">
                    <label for="name" class="formularioLabelDos">{{ __('Name') }}</label>
                </div>

                <div class="">
                    <input id="email" type="email" class="formularioInputDos" name="email" value="{{ $adminUser->email }}">
                    <label for="email" class="formularioLabelDos">{{ __('E-Mail Address') }}</label>
                </div>

                <div class="">
                    <input id="password" type="password" class="formularioInputDos" name="password">
                    <label for="password" class="formularioLabelDos">{{ __('Password') }}</label>
                </div>

                <div class="">
                    <input id="password-confirm" type="password" class="formularioInputDos" name="password_confirmation">
                    <label for="password-confirm" class="formularioLabelDos">{{ __('Confirm Password') }}</label>
                </div>

                <div class="">
                    <label for="rol" class="labelSelect">Rol</label>
                    <section class="sectionOpciones">
                        <select name="rol" id="rol" class="selectFormulario">
                            <option value="">Selecciona un Rol..</option>
                            <option value="usuario" {{ $adminUser->rol == 'usuario' ? 'selected' : ''}}>usuario</option>
                            <option value="administrador" {{ $adminUser->rol == 'administrador' ? 'selected' : ''}}>administrador</option>
                        </select>
                    </section>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
@endsection