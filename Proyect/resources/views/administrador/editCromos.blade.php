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
        <ul class="alertaUlCorrecto">
            <section class="alertaCorrecto">
                <p>{{ $message }}</p>
            </section>
        </ul>
    @endif
    <p class="formularioTitulo">Editar Cromo {{ $uploadCromo->nombreCromo }}</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('uploadCromos.update', $uploadCromo->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <label for="imgCromo" class="subirImg">Subir Imagen</label>
                    <input id="imgCromo" type="file" class="cromoInput" name="imgCromo" value="{{ $uploadCromo->imgCromo }}">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInputDos" name="nombreCromo" value="{{ $uploadCromo->nombreCromo }}" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabelDos">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInputDos" name="descripcion" value="{{ $uploadCromo->descripcion }}" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabelDos">Descripción</label>
                </div>

                <div class="">
                    <label for="id_tematica" class="labelSelect">Temática</label>
                    <section class="sectionOpcionesTematica">
                        <select name="id_tematica" id="id_tematica" class="selectFormulario">
                            <option value="">Selecciona una Temática..</option>
                            @foreach($tematicas as $tematica)
                                $tematic = {{ $tematica->nombretematica}}
                                <option value="{{ $tematica -> id }}" {{ $tematica->id == '{$tematica -> id' ? 'selected' : ''}}>
                                {{ $tematica -> nombretematica }}</option>
                            @endforeach
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