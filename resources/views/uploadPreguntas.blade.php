@extends('layouts.appAdmin')

@section('content')
<section class="contenidoAdmin">
    <p class="formularioTitulo">Registrar Pregunta</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="">
                @csrf
                <br>
                <div class="">
                    <input id="pregunta" type="text" class="formularioInput" name="pregunta" value="" required autocomplete="pregunta">
                    <label for="pregunta" class="formularioLabel">Pregunta</label>
                </div>

                <div class="">
                    <input id="respuesta" type="text" class="formularioInput" name="respuesta" value="" required autocomplete="respuesta">
                    <label for="respuesta" class="formularioLabel">Respuesta</label>
                </div>

                <div>
                    <div class="">
                        <input id="respuestaError1" type="text" class="formularioInput" name="respuestaError1" required autocomplete="respuestaError1">
                        <label for="respuestaError1" class="formularioLabel">Respuesta Error 1</label>
                    </div>
                    <div class="">
                        <input id="respuestaError2" type="text" class="formularioInput" name="respuestaError2" required autocomplete="respuestaError2">
                        <label for="respuestaError2" class="formularioLabel">Respuesta Error 2</label>
                    </div>
                    <div class="">
                        <input id="respuestaError3" type="text" class="formularioInput" name="respuestaError3" required autocomplete="respuestaError3">
                        <label for="respuestaError3" class="formularioLabel">Respuesta Error 3</label>
                    </div>
                </div>
                <div class="">
                    <input id="tematica" type="text" class="formularioInput" name="tematica" required autocomplete="tematica">
                    <label for="tematica" class="formularioLabel">Tematica</label>
                </div>

                <div class="">
                    <input id="nivel" type="text" class="formularioInput" name="nivel" required autocomplete="nivel">
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
    <script src="../../js/form.js"></script>
</section>
@endsection