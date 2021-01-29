@extends('layouts.appNavegando')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="formatoQuiz">
    <h2 class="tituloQuiz">Quiz</h2>
    @php 
        $contador = 1;  
    @endphp

    <form action="{{ route('test.store') }}" name="quiz"  id="myquiz" class="quiz">
        @foreach($preguntas as $pregunta)
            <article class="primerBorde">
                <article class="segundoBorde">
                    <h3>{{$pregunta->descripcion}}</h3>
                    <div class="opcion{{$contador}}">
                        <label class="containerQuiz">
                            <input type="radio" value="v1" name="question[{{$pregunta->descripcion}}]" class="inputQuiz" required>
                            <span class="checkmark"></span> {{$pregunta->opcion1}}
                        </label>
                    </div>
                    <div class="opcion{{$contador}}">
                        <label class="containerQuiz">
                            <input type="radio" value="v2" name="question[{{$pregunta->descripcion}}]" class="inputQuiz" required>
                            <span class="checkmark"></span>{{$pregunta->opcion2}}
                        </label>
                    </div>
                    <div class="opcion{{$contador}}">
                        <label class="containerQuiz">
                            <input type="radio" value="v3" name="question[{{$pregunta->descripcion}}]" class="inputQuiz" required>
                            <span class="checkmark"></span> {{$pregunta->opcion3}}
                        </label>
                    </div>
                    <div class="opcion{{$contador}}">
                        <label class="containerQuiz">
                            <input type="radio" value="v4" name="question[{{$pregunta->descripcion}}]" class="inputQuiz" required>
                            <span class="checkmark"></span> {{$pregunta->opcion4}}
                        </label>
                    </div>
                        <input type="hidden" name="nPregunta" id="nPregunta" value="{{$contador}}">
                        <input type="hidden" name="valorTematica" id="valorTematica" value="{{$tematica->id}}"> 
                    </article>
            </article>
            @php 
                $contador = $contador+1; 
            @endphp
            @if($contador == 6)
                @break
            @endif 
        @endforeach
        <section class="apartadoFinal">
            <article class="apartadoTiempo">
                <div id="status"></div>
            </article>
            <article class="apartadoBotonQuiz">
                <button type="submit" name="submitbutton" class="btn btn-success m-auto" id="mensajeResultado">Finalizar</button>
            </article>
        </section>
    </form>
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
    <script>
        function countDown(secs, elem) {
            var element = document.getElementById(elem);
            if((secs/60) < 1){
                element.innerHTML = "<h3>Te quedan <b>"+Math.floor( (secs) % 60 )+"</b> segundos </h3>";  
            } else if (secs >= 60 && secs < 120){
                element.innerHTML = "<h3>Te queda <b>"+Math.floor( (secs/60) % 60 )+ "</b> minuto <b>" +Math.floor( (secs) % 60 )+ "</b> segundos </h3>" 
            } else {
                element.innerHTML = "<h3>Te quedan <b>"+Math.floor( (secs/60) % 60 )+ "</b> minutos <b>" +Math.floor( (secs) % 60 )+ "</b> segundos </h3>";  
            }

            if(secs < 1) {
                document.quiz.submit();
            }
            else {
                secs--;
                setTimeout('countDown('+secs+',"'+elem+'")',1000);
            }
        }
    </script> 
    <script type="text/javascript">countDown( <?php echo 100  ?> ,"status");</script>
    <script>
        document.getElementById('mensajeResultado').onclick = function(){
            alert('Tus cromos se guardaron en el álbum');
        }
    </script>
</section>
@endsection