@extends('layouts.appNavegando')

@section('content')

<section class="estructuraTest">
    <h2>Test</h2>
    @php 
        $contador = 1;  
    @endphp
    <div id="status"></div>

    <form action="{{ route('test.store') }}" name="quiz"  id="myquiz">
        @foreach($preguntas as $pregunta)
            <article>
                <h3>{{$pregunta->descripcion}}</h3>
                    <div class="opcion{{$contador}}">
                        <input type="radio" value="v1" name="question[{{$pregunta->descripcion}}]"> {{$pregunta->opcion1}} <br>
                    </div>
                    <div class="opcion{{$contador}}">
                        <input type="radio" value="v2" name="question[{{$pregunta->descripcion}}]"> {{$pregunta->opcion2}} <br>
                    </div>
                    <div class="opcion{{$contador}}">
                        <input type="radio" value="v3" name="question[{{$pregunta->descripcion}}]"> {{$pregunta->opcion3}} <br>
                    </div>
                    <div class="opcion{{$contador}}">
                        <input type="radio" value="v4" name="question[{{$pregunta->descripcion}}]"> {{$pregunta->opcion4}} <br>
                    </div>
                        <input type="hidden" name="numeroPreg" id="numeroPreg" value="{{$contador}}"> 
                        <input type="hidden" name="valorInputUser" id="valorInputUser" value="{{auth()->user()->id}}"> 

            </article>
            @php 
                $contador = $contador+1;  
            @endphp
        @endforeach
        <button type="submit" name="submitbutton" class="btn btn-success m-auto"> Testear</button>
    </form>
    <!-- aletorizar respuestas -->
    <script>
        for (var x = 1; x<= 10; x++) {
            var cards = $(".opcion"+x);
            for(var i = 0; i < cards.length; i++){
                var target = Math.floor(Math.random() * cards.length -1) + 1;
                var target2 = Math.floor(Math.random() * cards.length -1) +1;
                cards.eq(target).before(cards.eq(target2));
            } 
        }
    </script>
    



@endsection