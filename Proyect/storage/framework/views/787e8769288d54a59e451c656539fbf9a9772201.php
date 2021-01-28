

<?php $__env->startSection('content'); ?>

<section class="estructuraTest">
    <h2>Test</h2>
    <?php 
        $contador = 1;  
    ?>
    <div id="status"></div>

    <form action="<?php echo e(route('test.store')); ?>" name="quiz"  id="myquiz">
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article>
                <h3><?php echo e($pregunta->descripcion); ?></h3>
                    <div class="opcion<?php echo e($contador); ?>">
                        <input type="radio" value="v1" name="question[<?php echo e($pregunta->descripcion); ?>]"> <?php echo e($pregunta->opcion1); ?> <br>
                    </div>
                    <div class="opcion<?php echo e($contador); ?>">
                        <input type="radio" value="v2" name="question[<?php echo e($pregunta->descripcion); ?>]"> <?php echo e($pregunta->opcion2); ?> <br>
                    </div>
                    <div class="opcion<?php echo e($contador); ?>">
                        <input type="radio" value="v3" name="question[<?php echo e($pregunta->descripcion); ?>]"> <?php echo e($pregunta->opcion3); ?> <br>
                    </div>
                    <div class="opcion<?php echo e($contador); ?>">
                        <input type="radio" value="v4" name="question[<?php echo e($pregunta->descripcion); ?>]"> <?php echo e($pregunta->opcion4); ?> <br>
                    </div>
                        <input type="hidden" name="numeroPreg" id="numeroPreg" value="<?php echo e($contador); ?>"> 
                        <input type="hidden" name="valorInputUser" id="valorInputUser" value="<?php echo e(auth()->user()->id); ?>"> 

            </article>
            <?php 
                $contador = $contador+1;  
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/usuario/quiz.blade.php ENDPATH**/ ?>