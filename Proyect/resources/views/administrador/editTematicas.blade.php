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
    <p class="formularioTituloEdit">Editar Temática {{ $adminTematica->nombretematica }}</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminTematicas.update', $adminTematica->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <br>
                <div class="">
                    <label for="imgTematica" class="subirImg">Subir Imagen</label>
                    <input id="imgTematica" type="file" class="cromoInput" name="imgTematica" value="{{ $adminTematica->imgtematica }}" required autocomplete="imgTematica">
                    
                </div>
                <div class="">
                    <input id="nombretematica" type="text" class="formularioInputDos" name="nombretematica" value="{{ $adminTematica->nombretematica }}" required autocomplete="nombretematica">
                    <label for="nombretematica" class="formularioLabelDos">Nombre</label>
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