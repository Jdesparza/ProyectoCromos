@extends('layouts.appNavegando')

@section('content')
<br>
<br>
<br>

<section >
    <ul class="slider">
        <li>
            <input type="radio" id="sbutton1" name="sradio" checked>
            <label for="sbutton1"></label>
            <img src="{{ asset('img/Frame4.png')}}" alt="slider">
        </li>
        <li>
            <input type="radio" id="sbutton2" name="sradio">
            <label for="sbutton2"></label>
            <img src="{{ asset('img/Frame5.png')}}" alt="slider">
        </li>
        <li>
            <input type="radio" id="sbutton4" name="sradio">
            <label for="sbutton4"></label>
            <img src="{{ asset('img/Frame6.png')}}" alt="slider">
        </li>
    </ul>
</section> 


<div class="imgCuerpo">
    <section class="sectionCuerpo">
        <h1>Temáticas</h1>
    </section>
    <section class ="articulos">
        <article class ="imagen">
            <img src="../../img/macroeconomia 2 (1).png" alt="tematica">
        <h5>Macroeconomía</h5>
        </article>
        <article class="imagen">
        <img src="../../img/Microeconomia.png" alt="tematica">
        <h5>Microeconomía</h5>
        </article>
        <article class="imagen">
        <img src="../../img/que-es-la-econometria-800x452 1.png" alt="tematica">
        <h5>Econometría</h5>
        </article>
    </section>
    <section class ="articulos">
        <article class ="imagen">
            <img src="../../img/macroeconomia 2 (1).png" alt="tematica">
        <h5>Macroeconomía</h5>
        </article>
        <article class="imagen">
        <img src="../../img/Microeconomia.png" alt="tematica">
        <h5>Microeconomía</h5>
        </article>
        <article class="imagen">
        <img src="../../img/que-es-la-econometria-800x452 1.png" alt="tematica">
        <h5>Econometría</h5>
        </article>
    </section>
</div>
@endsection