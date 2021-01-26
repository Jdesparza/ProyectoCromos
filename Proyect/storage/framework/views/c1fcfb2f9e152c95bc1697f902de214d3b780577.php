

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('mensaje')): ?>
	<ul class="alertaU2Correcto">
		<section class="alertaCorrecto2">
			<p><?php echo e($message); ?></p>
		</section>
	</ul>
<?php endif; ?>
<section class="sectionTitulo">
    <h1>Álbumes</h1>
</section>
<section class="sectionObtenerAlbum">
	<a href="/usuario/obtenerAlbum">Obtener Álbum</a>
</section>
<section class="mostrarAlbum">
    <section class="articulosAlbum">
        <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="articulosMostrarAlbum">
                <a href="<?php echo e(route('mostrarAlbum.show', $album->id)); ?>" class="navAlbum">
                    <img src="../../../img/mostrarAlbum.png" alt="album">
                    <section>
                        <h5 class="nombreTematica"><?php echo e($album->nombreAlbum); ?></h5>
                    </section>
                </a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/usuario/mostrarAlbum.blade.php ENDPATH**/ ?>