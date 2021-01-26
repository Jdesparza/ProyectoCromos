

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('mensaje')): ?>
	<ul class="alertaUlCorrecto">
		<section class="alertaCorrecto">
			<p><?php echo e($message); ?></p>
		</section>
	</ul>
<?php endif; ?>
<section class="start_btn1">
<button><a href="/usuario/obtenerAlbum">Obtener Álbum</a></button>
</section>

<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Álbumes</h1>
    </section>
    <section class="articulos">
        <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('mostrarAlbum.show', $album->id)); ?>" class="navTematicas">
                <article class="articulosTematica">
                    <img src="<?php echo e(asset('img/album.png')); ?>" alt="album">
                    <h5 class="nombreTematica"><?php echo e($album->nombreAlbum); ?></h5>
                </article>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\Laravel\ProyectoCromos\Proyect\resources\views/usuario/mostrarAlbum.blade.php ENDPATH**/ ?>