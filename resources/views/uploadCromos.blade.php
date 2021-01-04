@extends('layouts.appAdmin')

@section('content')
<section class="contenidoAdmin">
    <p class="formularioTitulo">Cargar Cromo</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="">
                @csrf
                <div class="">
                    <p class="subirImg">Subir Imagen</p>
                    <input id="imgCromo" type="image" src="../../img/image-regular 1.png" class="cromoInput" name="imgCromo" value="" required autocomplete="imgCromo">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInput" name="nombreCromo" value="" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabel">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Descripción</label>
                </div>

                <div class="">
                    <input id="tematica" type="text" class="formularioInput" name="tematica" required autocomplete="tematica">
                    <label for="tematica" class="formularioLabel">Tematica</label>
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