@extends('layouts.appNavegando')

@section('content')
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
        <img src="../../img/usuario (1) 1.png" alt="registrarse">
            Crear Album</div>
        <div class="">
            <form method="POST" action="{{ route('album.store')  }}">
                @csrf

                <div class="reg2">
                    <label for="id_album" class="labelInicio">Album</label>
                    <select name="id_album" id="id_album">
                        <option value="">Selecciona un Album..</option>
                        @foreach($albums as $album)
                                <option value="{{ $album -> id }}" {{ $album->id == '{$album -> id' ? 'selected' : ''}}}>
                                {{ $album -> nombreAlbum }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="">
                    <div class="reg9">
                        <button type="submit" class="">
                            Obtener
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
