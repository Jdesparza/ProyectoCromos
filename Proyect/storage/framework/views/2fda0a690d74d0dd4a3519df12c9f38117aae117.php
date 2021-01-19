

<?php $__env->startSection('content'); ?>
<br><br><br><br><br><br>

<section >
    <ul class="slider">
        <li>
            <input type="radio" id="sbutton1" name="sradio" checked>
            <label for="sbutton1"></label>
            <img src="<?php echo e(asset('img/Frame4.png')); ?>" alt="slider">
        </li>
        <li>
            <input type="radio" id="sbutton2" name="sradio">
            <label for="sbutton2"></label>
            <img src="<?php echo e(asset('img/Frame5.png')); ?>" alt="slider">
        </li>
        <li>
            <input type="radio" id="sbutton4" name="sradio">
            <label for="sbutton4"></label>
            <img src="<?php echo e(asset('img/Frame6.png')); ?>" alt="slider">
        </li>
    </ul>
</section> 


<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Temáticas</h1>
    </section>
    <section class="articulos">
        <?php $__currentLoopData = $tematicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tematica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="articulosTematica">
                <img src="<?php echo e(asset('storage').'/'.$tematica->imgTematica); ?>" width="342px" height="172px" alt="tematica">
                <h5 class="nombreTematica"><?php echo e($tematica->nombretematica); ?></h5>
                <h6 class="h6Parte1">Album:</h6>
                <h6 class="h6Parte2"><?php echo e($tematica->nombreAlbum); ?></h6>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/home.blade.php ENDPATH**/ ?>