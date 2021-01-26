@extends('layouts.appNavegando')

@section('content')
@if ($errors->any())
    <ul class="alertaU2">
        <section class="alerta2">
            @foreach($errors->all() as $error)
                <li class="alertaLi2">{{ $error }}</li>
            @endforeach
        </section>
    </ul>
@endif
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
        <img src="../../img/usuario (1) 1.png" alt="registrarse">
            Crear Album</div>
        <div class="">
            <form  action="{{ route('mostrarAlbum.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="">
                    <label for="id_album" class="labelSelect">Álbum</p></label>
                    <section class="">
                        <select name="id_album" id="id_album" class="selectFormulario">
                            <option value="">Selecciona un Álbum..</option>
                            @foreach($albums as $album)
                                <option value="{{ $album -> id }}" {{ $album->id == '{$album -> id' ? 'selected' : ''}}>
                                {{ $album -> nombreAlbum }}</option>
                            @endforeach
                        </select>
                    </section>
                </div>



                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Obtener
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
