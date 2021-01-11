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
    <p class="formularioTitulo">Registrar Pregunta</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('uploadPreguntas.store') }}">
                @csrf
                <br>
                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Pregunta</label>
                </div>

                <div class="">
                    <input id="respuestaCorrecta" type="text" class="formularioInput" name="respuestaCorrecta" value="{{ old('respuestaCorrecta') }}" required autocomplete="respuestaCorrecta">
                    <label for="respuestaCorrecta" class="formularioLabel">Respuesta</label>
                </div>

                <div class="">
                    <input id="respuestaError1" type="text" class="formularioInput" name="respuestaError1" value="{{ old('respuestaError1') }}" required autocomplete="respuestaError1">
                    <label for="respuestaError1" class="formularioLabel">Respuesta Error 1</label>
                </div>
                <div class="">
                    <input id="respuestaError2" type="text" class="formularioInput" name="respuestaError2" value="{{ old('respuestaError2') }}" required autocomplete="respuestaError2">
                    <label for="respuestaError2" class="formularioLabel">Respuesta Error 2</label>
                </div>
                <div class="">
                    <input id="respuestaError3" type="text" class="formularioInput" name="respuestaError3" value="{{ old('respuestaError3') }}" required autocomplete="respuestaError3">
                    <label for="respuestaError3" class="formularioLabel">Respuesta Error 3</label>
                </div>

                <div class="">
                    <label for="id_tematica" class="labelSelect">Temática</label>
                    <section class="sectionOpciones">
                        <select name="id_tematica" id="id_tematica" class="selectFormulario">
                            <option value="">Selecciona un Rol..</option>
                            @foreach($tematicas as $tematica)
                                $tematic = {{ $tematica->nombretematica}}
                                <option value="{{ $tematica -> id }}" {{ $tematica->id == '{$tematica -> id' ? 'selected' : ''}}>
                                {{ $tematica -> nombretematica }}</option>
                            @endforeach
                        </select>
                    </section>
                </div>

                <div class="">
                    <input id="nivel" type="number" class="formularioInput" name="nivel" value="{{ old('nivel') }}" required autocomplete="nivel">
                    <label for="nivel" class="formularioLabel">Nivel</label>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            {{ __('Agregar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
@endsection