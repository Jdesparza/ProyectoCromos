

<?php $__env->startSection('content'); ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- start Quiz button -->
  <div class="start_btn"><button>Comenzar</button></div>

<!-- Info Box -->
<div class="info_box">
    <div class="info-title"><span>Reglas del Quiz</span></div>
    <div class="info-list">
        <div class="info">1. Solo Tendrás <span>15 segundos</span> por pregunta.</div>
        <div class="info">2. Una vez que selecciones tu respuesta, no se podrá deshacer.</div>
        <div class="info">3. No se puede seleccionar ninguna opción una vez que pasa el tiempo.</div>
        <div class="info">4. No puedes salir de la prueba mientras juegas.</div>
        <div class="info">5. Obtendrá puntos según sus respuestas correctas.</div>
    </div>
    <div class="buttons">
        <button class="quit">Salir</button>
        <button class="restart">Continuar</button>
    </div>
</div>

<!-- Quiz Box -->
<div class="quiz_box">
    <header>
        <div class="title">Cuestionario</div>
        <div class="timer">
            <div class="time_left_txt">Tiempo</div>
            <div class="timer_sec">15</div>
        </div>
        <div class="time_line"></div>
    </header>
    <section class="query">
        <div class="que_text">
            <!-- Here I've inserted question from JavaScript -->
        </div>
        <div class="option_list">
            <!-- Here I've inserted options from JavaScript -->
        </div>
    </section>

    <!-- footer of Quiz Box -->
    <footer>
        <div class="total_que">
            <!-- Here I've inserted Question Count Number from JavaScript -->
        </div>
        <button class="next_btn">Siguiente</button>
    </footer>
</div>

<!-- Result Box -->
<div class="result_box">
    <div class="icon">
        <i class="fas fa-crown"></i>
    </div>
    <div class="complete_text">Haz completado el Quiz!</div>
    <div class="score_text">
        <!-- Here I've inserted Score Result from JavaScript -->
    </div>
    <div class="buttons">
    <button class = restart><a href="/usuario/mostrarAlbum">Ir a mi Colección</a></button>
        <button class="quit">Salir</button>
    </div>
</div>

<!-- Inside this JavaScript file I've inserted Questions and Options only -->

<script class="preguntasQuiz" id="preguntasQuiz">
    const preguntas = <?php echo json_encode($preguntas); ?>;
    let questionN = 0;
    // creating an array and passing the number, questions, options, and answers
    let questions = [
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            {
                numb: questionN = questionN +1,
                question: "<?php echo e($pregunta->descripcion); ?>",
                answer: "<?php echo e($pregunta->respuestaCorrecta); ?>",
                options: [
                    "<?php echo e($pregunta->opcion1); ?>",
                    "<?php echo e($pregunta->opcion2); ?>",
                    "<?php echo e($pregunta->opcion3); ?>",
                    "<?php echo e($pregunta->opcion4); ?>"
                ]
            },
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ];
    //selecting all required elements
    const start_btn = document.querySelector(".start_btn button");
    const info_box = document.querySelector(".info_box");
    const exit_btn = info_box.querySelector(".buttons .quit");
    const continue_btn = info_box.querySelector(".buttons .restart");
    const quiz_box = document.querySelector(".quiz_box");
    const result_box = document.querySelector(".result_box");
    const option_list = document.querySelector(".option_list");
    const time_line = document.querySelector("header .time_line");
    const timeText = document.querySelector(".timer .time_left_txt");
    const timeCount = document.querySelector(".timer .timer_sec");

    // if startQuiz button clicked
    start_btn.onclick = ()=>{
        info_box.classList.add("activeInfo"); //show info box
    }

    // if exitQuiz button clicked
    exit_btn.onclick = ()=>{
        info_box.classList.remove("activeInfo"); //hide info box
    }

    // if continueQuiz button clicked
    continue_btn.onclick = ()=>{
        info_box.classList.remove("activeInfo"); //hide info box
        quiz_box.classList.add("activeQuiz"); //show quiz box
        showQuetions(0); //calling showQestions function
        queCounter(1); //passing 1 parameter to queCounter
        startTimer(15); //calling startTimer function
        startTimerLine(0); //calling startTimerLine function
    }

    let timeValue =  15;
    let que_count = 0;
    let que_numb = 1;
    let userScore = 0;
    let counter;
    let counterLine;
    let widthValue = 0;


    const quit_quiz = result_box.querySelector(".buttons .quit");


    // if quitQuiz button clicked
    quit_quiz.onclick = ()=>{
        window.location.reload(); //reload the current window
    }

    const next_btn = document.querySelector("footer .next_btn");
    const bottom_ques_counter = document.querySelector("footer .total_que");

    // if Next Que button clicked
    next_btn.onclick = ()=>{
        if(que_count < questions.length - 1){ //if question count is less than total question length
            que_count++; //increment the que_count value
            que_numb++; //increment the que_numb value
            showQuetions(que_count); //calling showQestions function
            queCounter(que_numb); //passing que_numb value to queCounter
            clearInterval(counter); //clear counter
            clearInterval(counterLine); //clear counterLine
            startTimer(timeValue); //calling startTimer function
            startTimerLine(widthValue); //calling startTimerLine function
            timeText.textContent = "Tiempo"; //change the timeText to Time Left
            next_btn.classList.remove("show"); //hide the next button
        }else{
            clearInterval(counter); //clear counter
            clearInterval(counterLine); //clear counterLine
            showResult(); //calling showResult function
        }
    }
    get_random = function (list) {
    return list[Math.floor((Math.random()*list.length))];
        } 

    // getting questions and options from array
    function showQuetions(index){
        const que_text = document.querySelector(".que_text");
        var lista = [0,1,2,3];
        lista = lista.sort(function() {return Math.random() - 0.5});
        //creating a new span and div tag for question and option and passing the value using array index
        let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
        let option_tag = '<div class="option"><span>'+ questions[index].options[lista[1]] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[lista[0]] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[lista[2]] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[lista[3]] +'</span></div>';
        que_text.innerHTML = que_tag; //adding new span tag inside que_tag
        option_list.innerHTML = option_tag; //adding new div tag inside option_tag
        
        const option = option_list.querySelectorAll(".option");

        // set onclick attribute to all available options
        for(i=0; i < option.length; i++){
            option[i].setAttribute("onclick", "optionSelected(this)");
        }
    }
    // creating the new div tags which for icons
    let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
    let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

    //if user clicked on option
    function optionSelected(answer){
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        let userAns = answer.textContent; //getting user selected option
        let correcAns = questions[que_count].answer; //getting correct answer from array
        const allOptions = option_list.children.length; //getting all option items
        
        if(userAns == correcAns){ //if user selected option is equal to array's correct answer
            userScore += 1; //upgrading score value with 1
            answer.classList.add("correct"); //adding green color to correct selected option
            answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
            console.log("Correct Answer");
            console.log("Your correct answers = " + userScore);
        }else{
            answer.classList.add("incorrect"); //adding red color to correct selected option
            answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
            console.log("Wrong Answer");
        }
        for(i=0; i < allOptions; i++){
            option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
        }
        next_btn.classList.add("show"); //show the next button if user selected any option
    }

    function showResult(){
        info_box.classList.remove("activeInfo"); //hide info box
        quiz_box.classList.remove("activeQuiz"); //hide quiz box
        result_box.classList.add("activeResult"); //show result box
        const scoreText = result_box.querySelector(".score_text");
        if (userScore > 3){ // if user scored more than 3
            //creating a new span tag and passing the user score number and total question number
            let scoreTag = '<span>Felicitaciones 🎉, Haz acertado <p>'+ userScore +'</p> de <p>'+ questions.length +'</p></span>'
            +'<span>Haz Obtenido <p>'+ userScore +'</p> Cromos <p>';
            scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text
        }
        else if(userScore > 1){ // if user scored more than 1
            let scoreTag = '<span>Buen Trabajo 😎, Haz Acertado <p>'+ userScore +'</p> de <p>'+ questions.length +'</p></span>'
            +'<span>Haz Obtenido <p>'+ userScore +'</p> Cromos <p>';
            scoreText.innerHTML = scoreTag;
        }
        else if(userScore > 2){ // if user scored more than 1
            let scoreTag = '<span>Buen Trabajo 😎, Haz Acertado <p>'+ userScore +'</p> de <p>'+ questions.length +'</p></span>'
            +'<span>Haz Obtenido <p>'+ userScore +'</p> Cromos <p>';
            scoreText.innerHTML = scoreTag;
        }
        else{ // if user scored less than 1
            let scoreTag = '<span>Lo Sentimos 😐, Solo haz acertado <p>'+ userScore +'</p> de <p>'+ questions.length +'</p></span>';
            scoreText.innerHTML = scoreTag;
        }
    }

    function startTimer(time){
        counter = setInterval(timer, 1000);
        function timer(){
            timeCount.textContent = time; //changing the value of timeCount with time value
            time--; //decrement the time value
            if(time < 9){ //if timer is less than 9
                let addZero = timeCount.textContent; 
                timeCount.textContent = "0" + addZero; //add a 0 before time value
            }
            if(time < 0){ //if timer is less than 0
                clearInterval(counter); //clear counter
                timeText.textContent = "Tiempo Agotado"; //change the time text to time off
                const allOptions = option_list.children.length; //getting all option items
                let correcAns = questions[que_count].answer; //getting correct answer from array
                for(i=0; i < allOptions; i++){
                    option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
                }
                next_btn.classList.add("show"); //show the next button if user selected any option
            }
        }
    }

    function startTimerLine(time){
        counterLine = setInterval(timer, 29);
        function timer(){
            time += 1; //upgrading time value with 1
            time_line.style.width = time + "px"; //increasing width of time_line with px by time value
            if(time > 549){ //if time value is greater than 549
                clearInterval(counterLine); //clear counterLine
            }
        }
    }

    function queCounter(index){
        //creating a new span tag and passing the question number and total question
        let totalQueCounTag = '<span><p>'+ index +'</p> de <p>'+ questions.length +'</p> Preguntas</span>';
        bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/usuario/quiz.blade.php ENDPATH**/ ?>