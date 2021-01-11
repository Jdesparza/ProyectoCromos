@extends('layouts.appInicio')

@section('content')

<section >
    <ul class="slider">
        <li>
            <input type="radio" id="sbutton1" name="sradio" checked>
            <label for="sbutton1"></label>
            <img src="{{ asset('img/Frame1.png')}}" alt="">
        </li>
        <li>
            <input type="radio" id="sbutton2" name="sradio">
            <label for="sbutton2"></label>
            <img src="{{ asset('img/Frame2.png')}}" alt="">
        </li>
        <li>
            <input type="radio" id="sbutton3" name="sradio">
            <label for="sbutton3"></label>
            <img src="{{ asset('img/Frame3.png')}}" alt="">
        </li>
    </ul>
</section> 


<div class="imgCuerpo">
    <section class="sectionCuerpo">
        <h1>Temáticas</h1>
    </section>
    <section class ="articulos">
        <article class ="imagen">
            <img src="../../img/macroeconomia 2 (1).png" alt="">
        <h5>Macroeconomia</h5>
        </article>
        <article class="imagen">
        <img src="../../img/Microeconomia.png" alt="">
        <h5>Microeconomia</h5>
        </article>
        <article class="imagen">
        <img src="../../img/que-es-la-econometria-800x452 1.png" alt="">
        <h5>Econometria</h5>
        </article>
    </section>
    <section class ="articulos">
        <article class ="imagen">
            <img src="../../img/macroeconomia 2 (1).png" alt="">
        <h5>Tema 4</h5>
        </article>
        <article class="imagen">
        <img src="../../img/Microeconomia.png" alt="">
        <h5>Tema 5</h5>
        </article>
        <article class="imagen">
        <img src="../../img/que-es-la-econometria-800x452 1.png" alt="">
        <h5>Tema 6</h5>
        </article>
    </section>
</div>
@endsection