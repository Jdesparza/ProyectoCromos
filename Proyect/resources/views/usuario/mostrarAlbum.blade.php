@extends('layouts.appNavegando')

@section('content')
@if ($message = Session::get('mensaje'))
	<ul class="alertaU2Correcto">
		<section class="alertaCorrecto2">
			<p>{{ $message }}</p>
		</section>
	</ul>
@endif
<section class="sectionTitulo">
    <h1>Álbumes</h1>
</section>
<section class="sectionObtenerAlbum">
	<a href="/usuario/obtenerAlbum">Obtener Álbum</a>
</section>
<section class="mostrarAlbum">
    <section class="articulosAlbum">
        @foreach($albumes as $album)
            <article class="articulosMostrarAlbum">
                <a href="{{ route('mostrarAlbum.show', $album->id) }}" class="navAlbum">
                    <img src="../../../img/mostrarAlbum.png" alt="album">
                    <section>
                        <h5 class="nombreTematica">{{ $album->nombreAlbum}}</h5>
                    </section>
                </a>
            </article>
        @endforeach
    </section>
</section>

@endsection