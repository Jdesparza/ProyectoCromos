@extends('layouts.appInicio')

@section('content')
<br>
<br>
<br>

<section >
    <ul class="slider">
        <li>
            <input type="radio" id="sbutton1" name="sradio" checked>
            <label for="sbutton1"></label>
            <img src="{{ asset('img/Frame1.png')}}" alt="slider">
        </li>
        <li>
            <input type="radio" id="sbutton2" name="sradio">
            <label for="sbutton2"></label>
            <img src="{{ asset('img/Frame2.png')}}" alt="slider">
        </li>
        <li>
            <input type="radio" id="sbutton3" name="sradio">
            <label for="sbutton3"></label>
            <img src="{{ asset('img/Frame3.png')}}" alt="slider">
        </li>
    </ul>
</section> 

<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Temáticas</h1>
    </section>
    <section class="articulos">
        @foreach($tematicas as $tematica)
            <article class="articulosTematica">
                <img src="{{ asset('storage').'/'.$tematica->imgTematica}}" width="342px" height="172px" alt="tematica">
                <h5 class="nombreTematica">{{ $tematica->nombretematica}}</h5>
                <h6 class="h6Parte1">Album:</h6>
                <h6 class="h6Parte2">{{ $tematica->nombreAlbum}}</h6>
            </article>
        @endforeach
    </section>
</section>
@endsection