@extends('layouts.appNavegando')

@section('content')
<div class="imgCuerpo">
    <section class="sectionCuerpo">
        <h1>Seleccionar Temáticas</h1>
    </section>
    <section class ="articulos">
        <article class ="imagen">
            <a href="macro"><img src="../../img/macroeconomia 2 (1).png" alt=""></a>
        <h5>Macroeconomia</h5>
        </article>
        <article class="imagen">
        <a href="micro"><img src="../../img/Microeconomia.png" alt=""></a>
        <h5>Microeconomia</h5>
        </article>
        <article class="imagen">
        <a href="econ"><img src="../../img/que-es-la-econometria-800x452 1.png" alt=""></a>
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