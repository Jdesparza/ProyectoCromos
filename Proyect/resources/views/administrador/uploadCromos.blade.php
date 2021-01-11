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
    <p class="formularioTitulo">Cargar Cromo</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('uploadCromos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="imgCromo" class="subirImg">Subir Imagen</label>
                    <input id="imgCromo" type="file" class="cromoInput" name="imgCromo" value="{{ old('imgCromo') }}" required autocomplete="imgCromo">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInput" name="nombreCromo" value="{{ old('nombreCromo') }}" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabel">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Descripción</label>
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