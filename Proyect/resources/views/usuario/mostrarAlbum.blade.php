@extends('layouts.appNavegando')

@section('content')
@if ($message = Session::get('mensaje'))
	<ul class="alertaUlCorrecto">
		<section class="alertaCorrecto">
			<p>{{ $message }}</p>
		</section>
	</ul>
@endif
<section class="start_btn1">
<button><a href="/usuario/obtenerAlbum">Obtener Álbum</a></button>
</section>

<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Álbumes</h1>
    </section>
    <section class="articulos">
        @foreach($albumes as $album)
            <a href="{{ route('mostrarAlbum.show', $album->id) }}" class="navTematicas">
                <article class="articulosTematica">
                    <img src="{{ asset('img/album.png')}}" alt="album">
                    <h5 class="nombreTematica">{{ $album->nombreAlbum}}</h5>
                </article>
            </a>
        @endforeach
    </section>
</section>

@endsection