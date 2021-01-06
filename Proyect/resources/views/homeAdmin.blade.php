@extends('layouts.appAdmin')

@section('content')
<section class="contenidoHomeAdmin">
    <p class="titulo1">Usuarios de la Página</p>
    <article class="informacionUsers">
        <div class="titulo2">Admin</div>
        <div class="apartado1">
            <img src="../../img/user-shield-solid 1.png" alt="">
        </div>
        <div class="apartado2">
            <p class="apartado2_1">1</p>
            <p class="apartado2_2">Register</p>
        </div>
    </article>
    <article class="informacionUsers">
        <div class="titulo2">Normal User</div>
        <div class="apartado1">
            <img src="../../img/restroom-solid 1.png" alt="">
        </div>
        <div class="apartado2">
            <p class="apartado2_1">7</p>
            <p class="apartado2_2">Register</p>
        </div>
    </article>
</section>
@endsection